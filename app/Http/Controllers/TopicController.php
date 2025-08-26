<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public static function index() {
        return Topic::all();
    }

    public static function show($id) {
        return Topic::find($id); 
    }

}
