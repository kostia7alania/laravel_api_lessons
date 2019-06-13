<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use \App\User;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $req) {
        $user = new User;

        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);

        $user->save();
        return $user;
    }
}
