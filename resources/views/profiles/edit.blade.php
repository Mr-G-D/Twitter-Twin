@extends('layouts.layout')

@section('content')

    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf

        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>

            <input type="text" name="name" value="{{ $user->name }}" class="border border-gray-400 p-2 w-full" id="" required>

            @error('')

                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>

            <input type="text" name="username" value="{{ $user->username}}" class="border border-gray-400 p-2 w-full" id="" required>

            @error('')

                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                E-Mail
            </label>

            <input type="email" name="email" value="{{ $user->email }}" class="border border-gray-400 p-2 w-full" id="" required>

            @error('')

                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>

            <input type="password" name="password" class="border border-gray-400 p-2 w-full" id="" required>

            @error('')

                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Confirm Password
            </label>

            <input type="password" name="password_confirmation" class="border border-gray-400 p-2 w-full" id="" required>

            @error('')

                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
                
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-700 hover:shadow-md" type="submit">
                Submit
            </button>
        </div>

    </form>

@endsection

@section('css')
<style>
    input{
        background-color: rgba(244, 245, 247, var(--bg-opacity));
    }
</style>
    
@endsection