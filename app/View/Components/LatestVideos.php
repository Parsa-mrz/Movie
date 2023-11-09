<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestVideos extends Component
{
    public $latestVideos;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->latestVideos = Video::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest-videos');
    }
}
