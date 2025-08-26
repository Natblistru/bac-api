<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationQuestionController extends Controller
{
    public static function index() {
        return EvaluationQuestion::all();
    }

    public static function show($id) {
        return EvaluationQuestion::find($id); 
    }

}
