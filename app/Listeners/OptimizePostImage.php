<?php

namespace App\Listeners;

use App\Events\PostSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizePostImage implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostSaved  $event
     * @return void
     */
    public function handle(PostSaved $event)
    {
        $imagen = Image::make(Storage::get($event->post->imagen))
            ->widen(600)
            ->limitColors(255)
            ->encode();

        Storage::put($event->post->imagen, (string) $imagen);
    }
}
