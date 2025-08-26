<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function index() {
        return User::all();
    }

    public static function show($id) {
        return User::find($id); 
    }

}
