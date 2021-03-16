@extends('layouts.layout')

@section('content')

       <header class="mb-6 relatives">
           <img src="https://i.pinimg.com/originals/7d/c7/45/7dc7457a4dfc2e4d0fdbfbe8cd1d3292.png" alt="" class="mb-2 rounded-2xl">
           <div class="flex justify-between items-center mb-4">
                <div class=" my-2">
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
            <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, consequatur! Accusantium unde provident hic possimus tempora ab autem, dolor culpa dolores earum voluptas vitae nemo ullam vero. Quasi repudiandae dolorem labore totam soluta? Neque, alias?
            </p>
            <img class="rounded-full mr-2 absolute" style="width: 140px; left: calc(50% - 110px); top: 333px" src="{{ $user->avatar }}" alt="img">
       </header>
       
       @include('timeline', [
            'tweets' => $user->tweets
        ])
@endsection
