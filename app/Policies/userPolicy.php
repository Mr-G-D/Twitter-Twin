<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class userPolicy
{

    use HandlesAuthorization;

    public function edit(User $auth, $user){
        return $auth->is($user);
    }
}
