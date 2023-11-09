<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $latestVideos = Video::latest()->take(6)->get();
        $mostViewVideos = Video::all()->random(6);
        $mostPopularVideos = Video::all()->random(6);
        return view('index', compact('latestVideos', 'mostViewVideos', 'mostPopularVideos'));
    }
}
