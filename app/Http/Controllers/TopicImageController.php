<?php

namespace App\Http\Controllers;

use App\Models\TopicImage;
use Illuminate\Http\Request;

class TopicImageController extends Controller
{
    public static function index() {
        return TopicImage::all();
    }

    public static function show($id) {
        return TopicImage::find($id); 
    }

}
