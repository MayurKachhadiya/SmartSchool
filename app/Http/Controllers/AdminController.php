<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    public function Logout(){
        Auth::logout();                     //predefined function for logout given by jetstream ,we just have to call it.
        return Redirect()->route('login');
    }
}
