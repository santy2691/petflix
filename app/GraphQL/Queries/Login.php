<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {   
        if (!Auth::attempt($args)) {
            return "not_token";
        }
        $user = User::where('email',auth()->user()->email)->firstOrFail();

        return $user->createToken('token')->plainTextToken;
    }
}
