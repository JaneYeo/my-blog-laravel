<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $users = User::get(1);

        dd($user->name);

        
    }
}
