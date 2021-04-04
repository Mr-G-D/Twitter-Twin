<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class followController extends Controller
{
    public function store(User $user){
        
        Auth::user()->toggle($user);
        
        return back();
    }

    
    public function like(Tweet $tweet){
        $tweet->like(Auth::user());
        return back();
    }

    public function dislike(Tweet $tweet){
        $tweet->dislike(Auth::user());
        return back();
    }
}
