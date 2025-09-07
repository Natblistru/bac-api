<?php

namespace App\Http\Controllers;

use App\Models\TopicDomain;
use Illuminate\Http\Request;

class TopicDomainController extends Controller
{
    public function index() {
        return TopicDomain::all();
    }

    public function show($id) {
        return TopicDomain::find($id); 
    }

}
