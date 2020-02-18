<?php

namespace App\Listeners;

use App\Events\BookHasViewed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Counter
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
     * @param  BookHasViewed  $event
     * @return void
     */
    public function handle(BookHasViewed $event)
    {
        $event->book->increment('visit_count');
    }
}
