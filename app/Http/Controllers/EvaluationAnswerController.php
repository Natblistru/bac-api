<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluationAnswer;

class EvaluationAnswerController extends Controller
{
    public function index() {
        return EvaluationAnswer::all();
    }

    public function show($id) {
        return EvaluationAnswer::find($id); 
    }

}
