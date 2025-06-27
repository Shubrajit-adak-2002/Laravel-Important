<?php

namespace App\Observers;

use App\Models\Video;
use Illuminate\Support\Str;

class VideoObserver
{
    /**
     * Handle the Video "created" event.
     */
    public function created(Video $video): void
    {
        //
    }
    
    public function retrieved(Video $video): void
    {
        $video->increment('likes',1);
    }
    public function saving(Video $video): void
    {
        $video->slug = Str::slug($video->video_title,'.');
    }
    /**
     * Handle the Video "updated" event.
     */
    public function updated(Video $video): void
    {
        //
    }

    /**
     * Handle the Video "deleted" event.
     */
    public function deleted(Video $video): void
    {
        //
    }

    /**
     * Handle the Video "restored" event.
     */
    public function restored(Video $video): void
    {
        //
    }

    /**
     * Handle the Video "force deleted" event.
     */
    public function forceDeleted(Video $video): void
    {
        //
    }
}
