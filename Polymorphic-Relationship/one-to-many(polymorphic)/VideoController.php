<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::find(1);
        // return $videos->comment;

        echo "<h1>$videos->video_title</h1>";
        echo "<a>$videos->url</a><br><br>";

        foreach ($videos->comment as $video) {
            echo $video->info . "<hr>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $video = Video::find(1);
        $video->comment()->create([
            // 'info'=>'World\'s best video'
            'info'=>'The Greatest video'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
