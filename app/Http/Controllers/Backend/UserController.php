<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function __invoke()
    {
        return view('backend.users.all')->withUsers(User::all());
    }
}
