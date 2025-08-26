<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public static function index() {
        return Evaluation::all();
    }

    public static function show($id) {
        return Evaluation::find($id); 
    }
}
