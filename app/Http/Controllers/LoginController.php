<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class LoginController extends Controller
{
    //
    public function getLogin() {
        return view('login');
    }
}
