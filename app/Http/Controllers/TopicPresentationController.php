<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopicPresentation;

class TopicPresentationController extends Controller
{
    public static function index() {
        return TopicPresentation::all();
    }

    public static function show($id) {
        return TopicPresentation::find($id); 
    }

}
