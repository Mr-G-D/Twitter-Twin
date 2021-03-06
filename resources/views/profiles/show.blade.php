@extends('layouts.layout')

@section('content')

        <header class="mb-6 relatives">
            <div class="relative">
                <img src="https://i.pinimg.com/originals/7d/c7/45/7dc7457a4dfc2e4d0fdbfbe8cd1d3292.png" alt="" class="mb-2 rounded-2xl">

                <img class="rounded-full mr-2 absolute bottom-0 transform" style="width: 150px;left:50%;" src="{{ $user->avatar }}" alt="img">
            </div>
           <div class="flex justify-between items-center mb-4">
                <div style="max-width: 300px" class=" my-2">
                    <h2 class="font-bold text-2xl mb-0">
                        {{ $user->name }}
                    </h2>
                    <p class="text-sm">
                        Joined {{ $user->created_at->diffForHumans() }}
                    </p>
                </div>
                <div class="flex">
                    @can('edit',$user)
                        <a href="{{ $user->path('edit')}}" class="rounded-full mx-2 border border-gray-300 py-2 px-4 text-black text-sm">Edit Profile</a>
                    @endcan
                    @if ($auth->isnot($user))
                        <form method="POST" action="/profile/{{ $user->username }}/follow">
                            @csrf
                            <button type="submit" class="bg-blue-500 mx-2 rounded-full shadow py-2 px-4 text-white text-sm">{{ Auth::user()->following($user)? 'Following':'Follow Me'}}</button>
                        </form>
                    @endif

                </div>
            </div>
            <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, consequatur! Accusantium unde provident hic possimus tempora ab autem, dolor culpa dolores earum voluptas vitae nemo ullam vero. Quasi repudiandae dolorem labore totam soluta? Neque, alias?
            </p>  
        </header>

       @include('timeline', [
            'tweets' => $tweets
        ])


<style>
    .transform{
        --transform-translate-x: -60px;
        --transform-translate-y: 70px;
    }
    p{
        font-family: Verdana, sans-serif;
    }
</style>
@endsection