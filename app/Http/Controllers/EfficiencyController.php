<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EfficiencyController extends Controller
{
    //
    function index() {
        return view('efficiency.index');
    }
}
