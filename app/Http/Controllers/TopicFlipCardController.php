<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopicFlipCard;

class TopicFlipCardController extends Controller
{
    public static function index() {
        return TopicFlipCard::all();
    }

    public static function show($id) {
        return TopicFlipCard::find($id); 
    }

}
