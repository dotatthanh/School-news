<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::query();

        if (isset($request->name)) {
            $categories->where('name', 'like', '%'.$request->name.'%');
        }

        if (isset($request->parent_category_id)) {
            $categories->where('parent_category_id', $request->parent_category_id);
        }

        $categories = $categories->paginate(10);
        $categories->appends([
            'name' => $request->name,
            'parent_category_id' => $request->parent_category_id,
        ]);

        $data = [
            'categories' => $categories,
        ];

        return view('category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            $category = Category::create([
                'code' => '',
                'name' => $request->name,
                'parent_category_id' => $request->parent_category_id,
            ]);

            $category->update([
                'code' => 'CATEGORY'.str_pad($category->id, 6, '0', STR_PAD_LEFT),
            ]);

            DB::commit();

            return redirect()->route('categories.index')->with('alert-success', 'Add category success!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Add category fail!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = [
            'data_edit' => $category,
        ];

        return view('category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        try {
            DB::beginTransaction();

            $category->update([
                'name' => $request->name,
                'parent_category_id' => $request->parent_category_id,
            ]);

            DB::commit();

            return redirect()->route('categories.index')->with('alert-success', 'Update category success!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Update category fail!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();
            if ($category->news->count() > 0) {
                return redirect()->back()->with('alert-error', 'Delete category fail! Categoy '.$category->name.' is having news data.');
            }

            $category->destroy($category->id);

            DB::commit();

            return redirect()->route('categories.index')->with('alert-success', 'Delete category success!');
        } catch (Exception $e) {
            DB::rollback();

            return redirect()->back()->with('alert-error', 'Delete category fail!');
        }
    }

    public function getSubCategories(Request $request)
    {
        $data = Category::where('parent_category_id', $request->parent_category_id)->get();

        return response()->json(['data' => $data]);
    }
}
