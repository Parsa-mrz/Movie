@extends('layout')
@section('content')
<h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
            <div class="row">
                <!-- video-item -->
                @foreach($latestVideos as $video)
                <x-video-box :video=$video></x-video-box>
                @endforeach

            </div>  
         <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">
                @foreach($mostViewVideos as $video)
                <x-video-box :video=$video></x-video-box>
                @endforeach
            </div>
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
                @foreach($mostPopularVideos as $video)
                <x-video-box :video=$video></x-video-box>
                @endforeach
                
            </div>
            @endsection