@extends('layout')
@section('content')
            <h1 class="new-video-title"><i class="{{$category->icon}}"></i> {{$category->name}}</h1>
            <div class="row">
                @foreach($videos as $video)
                <x-video-box :video=$video></x-video-box>
                @endforeach
            </div>
            <div class="row text-center">
                {{ $videos->links() }}
            </div>
            @endsection

