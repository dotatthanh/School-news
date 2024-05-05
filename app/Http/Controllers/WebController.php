<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Models\SubCategory;
use Exception;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
    	$categoryResearchs = Category::where('parent_category_id', getConst('PARENT_CATEGORY1.Research'))->get();
        $newPost = News::where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->orderBy('id', 'desc')->first();
        $slidePost = News::where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->offset(1)->limit(6)->orderBy('id', 'desc')->get();
        $nonPost = News::where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->offset(7)->limit(5)->orderBy('id', 'desc')->get();

    	$data = [
    		'categoryResearchs' => $categoryResearchs,
    		'newPost' => $newPost,
    		'slidePost' => $slidePost,
    		'nonPost' => $nonPost,
    	];

    	return view('web.index', $data);
    }

    public function news()
    {
        $data = News::where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->get();

    	$data = [
    		'data' => $data,
    	];

    	return view('web.news', $data);
    }

    public function newsCategory(Category $category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->get();
        $data = News::where('category_id', $category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.news-category', $data);
    }

    public function newsSubCategory(Category $category, SubCategory $sub_category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->get();
    	$data = News::where('sub_category_id', $sub_category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.news-category', $data);
    }

    public function research()
    {
        $categoryResearchs = Category::where('parent_category_id', getConst('PARENT_CATEGORY1.Research'))->get();

    	$data = [
    		'categoryResearchs' => $categoryResearchs,
    	];

    	return view('web.research', $data);
    }

    public function researchCategory(Category $category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Research'))->get();
        $data = News::where('category_id', $category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.research-category', $data);
    }

    public function researchSubCategory(Category $category, SubCategory $sub_category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Research'))->get();
    	$data = News::where('sub_category_id', $sub_category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.research-category', $data);
    }

    public function about()
    {
        $categoryAbounts = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.About'))->get();

    	$data = [
    		'categoryAbounts' => $categoryAbounts,
    	];

    	return view('web.about', $data);
    }

    public function aboutCategory(Category $category)
    {
        $categoryAbounts = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.About'))->get();

    	$data = [
    		'categoryAbounts' => $categoryAbounts,
    		'data' => $category,
    	];

    	return view('web.about-category', $data);
    }

    public function aboutSubCategory(Category $category, SubCategory $sub_category)
    {
        $categoryAbounts = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.About'))->get();

    	$data = [
    		'categoryAbounts' => $categoryAbounts,
    		'data' => $sub_category,
    	];

    	return view('web.about-category', $data);
    }

    public function academics()
    {
        $categoryAcademics = Category::where('parent_category_id', getConst('PARENT_CATEGORY1.Academic'))->get();

    	$data = [
    		'categoryAcademics' => $categoryAcademics,
    	];

    	return view('web.academics', $data);
    }

    public function academicsCategory(Category $category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Academic'))->get();
        $data = News::where('category_id', $category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.academics-category', $data);
    }

    public function academicsSubCategory(Category $category, SubCategory $sub_category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Academic'))->get();
    	$data = News::where('sub_category_id', $sub_category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.academics-category', $data);
    }

    public function alumni()
    {
    	$categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Alumni'))->get();
    	$data = News::where('parent_category_id', getConst('PARENT_CATEGORY1.Alumni'))->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.alumni', $data);
    }

    public function alumniCategory(Category $category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Alumni'))->get();
        $data = News::where('category_id', $category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.alumni', $data);
    }

    public function alumniSubCategory(Category $category, SubCategory $sub_category)
    {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Alumni'))->get();
    	$data = News::where('sub_category_id', $sub_category->id)->paginate(10);

    	$data = [
    		'categories' => $categories,
    		'data' => $data,
    	];

    	return view('web.alumni', $data);
    }

    public function newsDetail(Category $category, SubCategory $sub_category, News $news) {
    	$categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.News'))->get();

    	$data = [
    		'categories' => $categories,
    		'data' => $news,
    	];

    	return view('web.news-detail', $data);
    }

    public function researchDetail(Category $category, SubCategory $sub_category, News $news) {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Research'))->get();

    	$data = [
    		'categories' => $categories,
    		'data' => $news,
    	];

    	return view('web.research-detail', $data);
    }

    // public function aboutDetail(Category $category, SubCategory $sub_category, News $news) {

    // }

    public function academicsDetail(Category $category, SubCategory $sub_category, News $news) {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Academic'))->get();

    	$data = [
    		'categories' => $categories,
    		'data' => $news,
    	];

    	return view('web.academics-detail', $data);
    }

    public function alumniDetail(Category $category, SubCategory $sub_category, News $news) {
        $categories = Category::with('subCategories')->where('parent_category_id', getConst('PARENT_CATEGORY1.Alumni'))->get();

    	$data = [
    		'categories' => $categories,
    		'data' => $news,
    	];

    	return view('web.alumni-detail', $data);
    }

    public function contact()
    {
    	return view('web.contact');
    }

    public function postContact(StoreContactRequest $request)
    {
    	try {
            DB::beginTransaction();
            Contact::create($request->all());

            DB::commit();
            return redirect()->back()->with('alert-success','Send feedback success!');
        } catch (Exception) {
            DB::rollback();
            return redirect()->back()->with('alert-error','Send feedback fail!');
        }
    }
}
