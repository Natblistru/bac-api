<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopicVideoBreakpoint;

class TopicVideoBreakpointController extends Controller
{
    public static function index() {
        return TopicVideoBreakpoint::all();
    }

    public static function show($id) {
        return TopicVideoBreakpoint::find($id); 
    }

}
