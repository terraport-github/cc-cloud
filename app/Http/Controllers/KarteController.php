<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class KarteController extends Controller
{
    function index() {
        $schools = School::All();
        return view('karte.index', [
            'schools' => $schools
        ]);
    }

    function detail($school_id) {
        $school = School::find($school_id);
        return view('karte.detail', [
            'school' => $school,
        ]);
    }

    function edit($school_id) {
        $school = School::find($school_id);
        return view('school.edit', [
            'school' => $school,
        ]);
    }

}
