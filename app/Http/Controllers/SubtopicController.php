<?php

namespace App\Http\Controllers;

use App\Models\Subtopic;
use Illuminate\Http\Request;

class SubtopicController extends Controller
{
    public static function index() {
        return Subtopic::all();
    }

    public static function show($id) {
        return Subtopic::find($id); 
    }

}
