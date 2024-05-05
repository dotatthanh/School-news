<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::with('category');

        if ($request->search) {
            $news = News::where('title', 'like', '%'.$request->search.'%');
            $news->appends(['search' => $request->search]);
        }
        $news = $news->paginate(10);

        $data = [
            'news' => $news,
        ];

        return view('news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = [];
        $subCategories = [];

        $data = [
            'categories' => $categories,
            'subCategories' => $subCategories,
        ];

        return view('news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        try {
            DB::beginTransaction();

            if ($request->file('image')) {
                $name = time().'_'.$request->image->getClientOriginalName();
                $file_path_image = 'uploads/news/'.$name;
                Storage::disk('public_uploads')->putFileAs('news', $request->image, $name);
            }

            News::create([
                'title' => $request->title,
                // 'slug' => Str::of($request->title)->slug('-'),
                'image' => $file_path_image,
                'parent_category_id' => $request->parent_category_id,
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'content' => $request->content,
                'summary' => $request->summary,
            ]);

            DB::commit();

            return redirect()->route('news.index')->with('alert-success', 'Thêm tin tức thành công!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Thêm tin tức thất bại!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::where('parent_category_id', $news->parent_category_id)->get();
        $subCategories = SubCategory::where('category_id', $news->category_id)->get();

        $data = [
            'data_edit' => $news,
            'categories' => $categories,
            'subCategories' => $subCategories,
        ];

        return view('news.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        try {
            DB::beginTransaction();

            $data = [
                'title' => $request->title,
                // 'slug' => Str::of($request->title)->slug('-'),
                'parent_category_id' => $request->parent_category_id,
                'category_id' => $request->category_id,
                'sub_category_id' => $request->sub_category_id,
                'content' => $request->content,
                'summary' => $request->summary,
            ];

            if ($request->file('image')) {
                $name = time().'_'.$request->image->getClientOriginalName();
                $file_path_image = 'uploads/news/'.$name;
                Storage::disk('public_uploads')->putFileAs('news', $request->image, $name);
                $data['image'] = $file_path_image;
            }

            $news->update($data);

            DB::commit();

            return redirect()->route('news.index')->with('alert-success', 'Sửa tin tức thành công!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Sửa tin tức thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        try {
            DB::beginTransaction();

            News::destroy($news->id);

            DB::commit();

            return redirect()->route('news.index')->with('alert-success', 'Xóa tin tức thành công!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Xóa tin tức thất bại!');
        }
    }
}
