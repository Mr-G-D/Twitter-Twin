<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class profileController extends Controller
{
    public function show(User $user){
        return view('profiles.show', compact('user'));
    }
}
