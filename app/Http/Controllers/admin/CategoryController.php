<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function index(){
        $title = 'Quản Lý Danh Mục';
        $category = Category::all();

        return view('admin.pages.category.index', compact(
            'category',
            'title',
        ));
        
    }

    public function create() {
        $title = " Thêm mới danh mục";
        return view('admin.pages.category.create', compact(
            'title',
        ));
    }


    public function store(StoreCategoryRequest $request){
        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'meta_keyword' => $request->meta_keyword,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description
        ]);
            toastr()->success('Thêm danh mục thành công');
            return redirect()->route('admin.category');
    }


    public function edit($id){
        $title = 'Chỉnh sửa danh mục';
        $category = DB::table('categories')->find($id);

        return view('admin.pages.category.edit', compact(
            'title',
            'category'
        ));
    }

    public function update(UpdateCategoryRequest $request, $id){
      $categoryUpdate = Category::find($id);
      $categoryUpdate -> name = $request->name;
      $categoryUpdate -> meta_title = $request->meta_title;
      $categoryUpdate -> meta_keyword = $request->meta_keyword;
      $categoryUpdate -> meta_description = $request->meta_description;
      $categoryUpdate -> slug = Str::slug($request->name, '-');

      $categoryUpdate -> save();

      toastr()->success('Cập nhật thành công');
      return redirect()->route('admin.category');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        
        toastr()->success('Xóa thành công!');
        return redirect()->back();
    }

    

}
