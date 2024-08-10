<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "content" => "required",
        ], [
            'content.required' => 'Bạn chưa nhập bình luận'
        ]);

        $comment = new Comment;
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;

        $comment->save();
        toastr()->success('Bình luận thành công');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        // dd($request->all());
        $request->validate([
            'content' => 'required',
        ], [
            'content.required' => 'Bạn chưa nhập bình luận',
                ]);

        $commentUpdate = Comment::find($request->input('id'));
        $commentUpdate->content = $request->content;
        $commentUpdate->save();
        toastr()->success('Đã sửa bình luận');
        return back();

    }

    public function reply(Request $request){
        $request->validate([
            'content' => 'required'
        ],[
            'content.required' => 'Bạn chưa nhập bình luận'
        ]);
        $reply = new Comment();
        $reply->content = $request->input('content');
        $reply->user_id = auth()->user()->id;
        $reply->post_id = $request->input('post_id');
        $reply->parent_id = $request->input('parent_id');
        $reply->save();
        toastr()->success('Bình luận thành công');
        return back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment, $id)
    {
            $comment = Comment::findOrFail($id);
            $comment->delete();
            toastr()->success('Đã xóa bình luận');
            return back();
        
    }
}
