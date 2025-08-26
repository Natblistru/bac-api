<?php

namespace App\Http\Controllers;

use App\Models\TopicVideo;
use Illuminate\Http\Request;

class TopicVideoController extends Controller
{
    public static function index() {
        return TopicVideo::all();
    }

    public static function show($id) {
        return TopicVideo::find($id); 
    }

}
