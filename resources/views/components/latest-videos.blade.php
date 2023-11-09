<div class="row">
    <!-- video-item -->
    @foreach($latestVideos as $video)
    <x-video-box :video=$video></x-video-box>
    @endforeach

</div>