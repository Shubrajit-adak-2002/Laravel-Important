<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Here we are storing data in a array named $data, under the key posts
        $data['posts'] = Post::all();

        return response()->json([
            'status' => true,
            'message' => 'All Posts',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $validatePost = Validator::make(
            $req->all(),
            [
                'title' => 'required',
                'desc' => 'required|'
            ]
        );

        if ($validatePost->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Requirements are not matching',
                'error' => $validatePost->errors()->all()
            ], 401);
        }

        Post::create([
            'title' => $req->title,
            'desc' => $req->desc,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post Created',
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['posts'] = Post::select(
            'id',
            'title',
            'description'
        )->where(['id'=>$id]);

        return response()->json([
            'status'=>true,
            'message'=>'Your Post',
            'data'=>$data
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
         $validatePost = Validator::make(
            $req->all(),
            [
                'title' => 'required',
                'desc' => 'required'
            ]
        );

        if ($validatePost->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Requirements are not matching',
                'error' => $validatePost->errors()->all()
            ], 401);
        }

        Post::where('id',$id)->update([
            'title' => $req->title,
            'desc' => $req->desc,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Post Updated',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::where('id',$id)->delete();

        return response()->json([
            'status'=>true,
            'message'=>'Post Deleted',
            'data'=>$post
        ],200);
    }
}
