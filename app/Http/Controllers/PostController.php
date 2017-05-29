<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use DateTime;

class PostController extends Controller
{

    public function index(){
        $data = Post::select()->get()->toArray();
        return view('index',['data'=>$data]);
    }

	public function list()
    {
        $data = Post::select()->get()->toArray();
        return view('manage',['data'=>$data]);
    }

    public function create(){
    	return view('upload');
    }

    public function upload(PostRequest $request)
    {
        $post = new Post;
        $post->name = $request->txtName;
        $post->video = $request->txtVideo;
        $post->link = $request->txtLink;
        $post->email = $request->txtEmail;
        $post->content = $request->txtContent;
        $post->created_at = new DateTime();
        $post->save();
        return redirect()->route('list'); 
    }

    public function edit($id){
        $data = Post::find($id)->toArray();
        return view('edit',['data' => $data]);
    }

    public function update(PostRequest $request, $id){
        $post = Post::find($id);
        $post->name = $request->txtName;
        $post->video = $request->txtVideo;
        $post->link = $request->txtLink;
        $post->email = $request->txtEmail;
        $post->content = $request->txtContent;
        $post->created_at = new DateTime();
        $post->save();
        return redirect()->route('list'); 
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('list');
    }

}
