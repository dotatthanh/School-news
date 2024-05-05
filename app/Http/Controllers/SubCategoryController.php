<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = SubCategory::query();

        if (isset($request->name)) {
            $categories->where('name', 'like', '%'.$request->name.'%');
        }

        if (isset($request->category_id)) {
            $categories->where('category_id', $request->category_id);
        }

        $categories = $categories->paginate(10);
        $categories->appends([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        $data = [
            'categories' => $categories,
        ];

        return view('sub-category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories,
        ];

        return view('sub-category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $subCategory = SubCategory::create([
                'code' => '',
                'name' => $request->name,
                // 'slug' => Str::of($request->name)->slug('-'),
                'category_id' => $request->category_id,
                'description' => $request->description,
            ]);

            $subCategory->update([
                'code' => 'SUBCATEGORY'.str_pad($subCategory->id, 6, '0', STR_PAD_LEFT),
            ]);

            DB::commit();

            return redirect()->route('sub-categories.index')->with('alert-success', 'Add sub category success!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Add sub category fail!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories,
            'data_edit' => $subCategory,
        ];

        return view('sub-category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSubCategoryRequest $request, SubCategory $subCategory)
    {
        try {
            DB::beginTransaction();

            $subCategory->update([
                'name' => $request->name,
                // 'slug' => Str::of($request->name)->slug('-'),
                'category_id' => $request->category_id,
                'description' => $request->description,
            ]);

            DB::commit();

            return redirect()->route('sub-categories.index')->with('alert-success', 'Update sub category success!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Update sub category fail!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        try {
            DB::beginTransaction();
            if ($subCategory->news->count() > 0) {
                return redirect()->back()->with('alert-error', 'Delete sub category fail! Categoy '.$subCategory->name.' is having news data.');
            }

            $subCategory->destroy($subCategory->id);

            DB::commit();

            return redirect()->route('sub-categories.index')->with('alert-success', 'Delete sub category success!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Delete sub category fail!');
        }
    }

    public function getSubCategories(Request $request)
    {
        $data = SubCategory::where('category_id', $request->category_id)->get();

        return response()->json(['data' => $data]);
    }
}
