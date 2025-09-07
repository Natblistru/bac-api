<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TopicContentUnit;

class TopicContentUnitController extends Controller
{
    public function index() {
        return TopicContentUnit::all();
    }

    public function show($id) {
        return TopicContentUnit::find($id); 
    }
}
