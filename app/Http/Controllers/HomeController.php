<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view ('home',[
            'tweets'=> auth()->user()->timeline()
            ]
        );
    }

    public function tweet(Request $request ){
        $body = $request->validate(['body' => 'required|max:256']);
        $tweet = new Tweet;
        $tweet->user_id = Auth::user()->id;
        $tweet->body = $body['body'];
        $tweet->created_at = now();
        $tweet->save();
        return redirect('/home');
    }
}
