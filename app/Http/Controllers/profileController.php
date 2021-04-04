<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function show(User $user){
        $auth = Auth::user();
        return view('profiles.show', compact('auth'), [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(10)
        ]);
    }

    public function editProfile(User $user){
        $this->authorize('edit',$user);
        return view('profiles.edit')->with("user",$user);
    }
    
    public function updateProfile(User $user, Request $request){
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'email' =>['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);
        $attributes['password'] = bcrypt($request['password']);

        $user->update($attributes);

        return redirect($user->path());
    }

    public function explore(){
        $user = User::get()->all();

        return view('explore')->with('user',$user);
    }

}
