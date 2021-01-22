@extends('layouts.app')

@section('content')
<div class="lg:flex justify-between">
    <div class="lg:w-32 mb=8">
        @include('sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10 p-2" style="max-width: 1000px;">
        @include('tweet-panel')


        <div class="border border-gray-300 rounded-lg">
            @foreach ($tweets as $tweet)
                @include('tweet')
            @endforeach
            
            
        </div>
    </div>
    <div class="w-1/6 rounded-lg p-4 bg-blue-100">
        @include('friends-list')
    </div>
</div>
@endsection
