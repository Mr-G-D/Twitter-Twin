@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="w-1/4">
        @include('sidebar-links')
    </div>
    <div class="flex-1">2</div>
    <div class="w-1/4">
        @include('friends-list')
    </div>
</div>
@endsection
