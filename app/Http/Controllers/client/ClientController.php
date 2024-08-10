<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class ClientController extends Controller
{
    public function index()
    {
        $tinmoinhat = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(4)->get();
        // dd($tinmoinhat);
        $tinxemnhieu = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('view')
            ->limit(4)->get();
       
        $categories = Category::all();

        return view("client.pages.home", compact(
            'tinmoinhat',
            'tinxemnhieu',
            'categories'
            

        ));
    }

    public function lienhe(){
        $tinmoinhat = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(4)->get();
            $categories = Category::all();
        return view("client.pages.lienhe", compact(
            'tinmoinhat',
            'categories'
        ));
    }

    public function gioithieu(){
        $tinmoinhat = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(4)->get();
            $categories = Category::all();
        return view("client.pages.gioithieu", compact(
            'tinmoinhat',
            'categories'
        ));
    }

    public function loaitin($slug)
    {
        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();
        $slug = str_replace(".html", "", $slug);
        $categories = Category::all();
        $category = Category::with('posts')->where('slug', $slug)->first();
        if ($category == NULL) {
            return abort(403, 'Loại tin không tồn tại');
        }
        return view("client.pages.news", compact(
            'category',
            'tinmoinhat',
            'categories'
        ));
    }

    public function tinchitiet($slug)
    {
        $slug = str_replace(".html", "", $slug);
        $post = Post::where('slug', $slug)->where('status', 'public')->first();
        if ($post == NULL) {
            return abort(403, 'Trang không tồn tại');
        }

        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();
        $id_danhmuc = $post->categories()->first()->id;
        $tinlienquan = Category::with('posts')->find($id_danhmuc);
        // dd($tinlienquan->posts);
        // dd($post);
        $categories = Category::all();
        
        // $comments = Comment::all();
       
        return view("client.pages.detail", compact(
            'post',
            'tinlienquan',
            'tinmoinhat',
            'categories',
            // 'comments'
        ));
    }

    function tinmoi()
    {
        $tinmoinhat = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(4)->get();
        $title = "Tin mới nhất";
        $meta_description = 'Tin mới nhất';
        $meta_keyword = 'Tin xem nhiều, xem nhiều,...';
        $data = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(10)->paginate(2);
            $categories = Category::all();
        return view('Client.pages.tinmoinhat', compact(
            'title',
            'data',
            'meta_description',
            'meta_keyword',
            'tinmoinhat',
            'categories'
            
        ));
    }

    function tinxemnhieu()
    {
        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();
        $title = "Tin xem nhiều";
        $meta_description = 'Tin xem nhiều';
        $meta_keyword = 'Tin xem nhiều, xem nhiều,...';
        $data = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('view')
            ->limit(10)->paginate(2);
            $categories = Category::all();
        return view('Client.pages.tinmoinhat', compact(
            'title',
            'data',
            'meta_description',
            'meta_keyword',
            'tinmoinhat',
            'categories'
        ));
    }

    public function tin(){
        
        $tinmoinhat = Post::with('user', 'categories')
        ->where('status', 'public')
        ->orderByDesc('created_at')
        ->limit(4)->get();

        $alltin = Post::with('user', 'categories')  
        ->where('status', 'public')
        ->get();
        $categories = Category::all();
        return view('client.pages.allnews', compact(
            'alltin',
            'tinmoinhat',
            'categories'
        ));


    }

    public function loginUser()
    {
        return view("client.auth.login");
    }
    public function signupUser()
    {
        return view("client.auth.signup");
    }

    public function timkiem()
    
    {
        $categories = Category::all();

        if (isset($_GET['q']) && $_GET['q'] != "") {
            $q = $_GET['q'];
            $tinmoinhat = Post::with('user', 'categories')
            ->where('status', 'public')
            ->orderByDesc('created_at')
            ->limit(4)->get();
            $posts = Post::with('user', 'categories')
                ->where('name', 'LIKE', "%$q%")
                ->where('status','public')
                ->get();
            return view("client.pages.timkiem", compact(
                'posts',
                'tinmoinhat',
                'categories'
            ));
        }
        $posts = NULL;
        return view("client.pages.timkiem", compact(
            'posts',
            'categories'
            
        ));

        // dd($q);




    }
}
