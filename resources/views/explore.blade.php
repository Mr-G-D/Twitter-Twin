@extends('layouts.layout')

@section('content')

<div class="grid grid-cols-3 gap-4">
    @foreach ($user as $users)

    <div class="mb-4">
        <a href="{{ route('profile', $users->username )}}">
            <div class="flex items-center text-sm">
                <img class="rounded-full mr-2" src="{{ $users->avatar }}" style="width: 40px" alt="img">
                {{ $users->name }}
            </div>
        </a>
    </div>
        
    @endforeach
</div>
    
@endsection