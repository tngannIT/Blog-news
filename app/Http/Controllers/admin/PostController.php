<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovePost;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index()
    {
        // $name = 'Ngân';
        // $email = 'ngan11@gmail.com';
        // Mail::to('nganbtpd07553@fpt.edu.vn')->send(new ApprovePost($name, $email));

        //    Auth::user()->can('view post') ?  '' : abort(403, 'Bạn không có quyền');
        $title = 'Quản Lý Bài Viết';
        $posts = Post::with('user', 'categories')->get();

        return view('admin.pages.post.index', compact(
            "title",
            "posts"
        ));
    }

    public function create()
    {
        $title = 'Thêm bài viết';
        $categories = Category::all();
        return view('admin.pages.post.create', compact(
            "title",
            "categories"
        ));
    }

    public function edit($id)
    {
        $title = 'Sửa bài viết';
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.pages.post.edit', compact('title', 'post', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:posts",
            "category_id" => "required"
        ], [
            'name.required' => 'Trường tên bài viết không được để trống',
            'name:unique' => 'Tên bài viết đã tồn tại',
            'category_id.required' => 'Chưa chọn danh mục bài viết'
        ]);
        $post = new Post;
        $post->name = $request->name;
        $post->slug = Str::slug($request->name);
        $post->short_content = $request->short_content;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;
        $post->status = 'pending';
        $post->user_id = Auth::user()->id;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;

        $post->save();

        foreach ($request->category_id as $category) {
            $post->categories()->attach($category);
        }

        toastr()->success('Thêm bài viết thành công');
        return to_route('admin.post');

        // dd($request->all());
    }

    public function update(Request $request, $id)
    {
        // validate

        $request->validate([
            'name' => 'required|unique:posts,name,' . $id,
            "category_id" => "required"
        ], [
            'name.required' => 'Trường tên bài viết không được để trống',
            'name:unique' => 'Tên bài viết đã tồn tại',
            'category_id.required' => 'Chưa chọn danh mục bài viết'
        ]);

        $post = Post::find($id);
        $post->name = $request->name;
        $post->slug = Str::slug($request->name);
        $post->short_content = $request->short_content;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;
        
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;

        $post->save();


        $post->categories()->sync($request->category_id);


        toastr()->success('Cập nhật thành công');
        return to_route('admin.post');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->categories()->detach();
        $post->delete();

        toastr()->success('Xóa thành công');
        return redirect()->back();
    }

    //Quản lý trạng thái bài viết
    public function indexApprove()
    {
        $title = 'Duyệt bài viết';
        $posts = Post::where('status', 'pending')->get();

        return view('admin.pages.post.approve.index', compact(
            'title',
            'posts'
        ));
    }

    public function viewApprove($slug)
    {
        $title = 'Xem bài viết';
        $post = Post::where('slug', $slug)->first();
        return view('admin.pages.post.approve.view', compact(
            'title',
            'post'
        ));
    }

    public function statusApprove($id, $status)
    {

        $post = Post::find($id);
        $post->status = $status;
        $post->save();

        $emailAuthor = $post->user->email;
        $notice = 'Bài viết đã bị từ chối';
        if ($status == 'refuse') {
            Mail::to($emailAuthor)->send(new ApprovePost($post,$notice));
            toastr()->success('Từ chối bài viết thành công');
        }else{
            $notice = 'Bài viết của bạn đã được duyệt';
            Mail::to($emailAuthor)->send(new ApprovePost($post,$notice));
            toastr()->success('Duyệt bài viết thành công');
            return to_route('admin.approve-post');
        }

       
    }
}
