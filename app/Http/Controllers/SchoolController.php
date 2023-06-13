<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    //

    function index() {
        $schools = School::All();
        return view('school.index', [
            'schools' => $schools
        ]);
    }

    function detail($school_id) {
        $school = School::find($school_id);
        return view('school.detail', [
            'school' => $school,
        ]);
    }

    function edit($school_id) {
        $school = School::find($school_id);
        return view('school.detail', [
            'school' => $school,
        ]);
    }

    function post($school_id) {
        $school = School::find($school_id);
        return view('school.detail', [
            'school' => $school,
        ]);
    }
}
