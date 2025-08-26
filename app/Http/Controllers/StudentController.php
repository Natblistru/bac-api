<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public static function index() {
        return Student::all();
    }
    public static function show($id) {
        return Student::find($id); 
    }

}
