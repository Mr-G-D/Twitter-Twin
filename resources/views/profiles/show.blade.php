@extends('layouts.app')

@section('content')

       <header class="mb-6">
           <img src="https://i.pinimg.com/originals/7d/c7/45/7dc7457a4dfc2e4d0fdbfbe8cd1d3292.png" alt="" class="mb-2">
           <div class="flex justify-between items-center">
                <div>
                    <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                    <p class="text-sm">
                        Joined {{ $user->created_at->diffForHumans() }}
                    </p>
                </div>
                <div>
                    <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-black text-sm">Edit Profile</a>
                    <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white">Follow Me</a>
                </div>
            </div>
       </header>
       
       @include('timeline', [
            'tweets' => $user->tweets
        ])
@endsection
