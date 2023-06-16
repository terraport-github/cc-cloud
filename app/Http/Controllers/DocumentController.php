<?php

namespace App\Http\Controllers;

use App\Enums\DocumentKind;
use App\Models\Document;
use App\Models\DocumentGroup;
use App\Models\DocumentGroupDetail;
use App\Models\School;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function index() {
        return view('document.index');
    }

    function detail(Request $request) {
        $documents = Document::where('document_kind', $request->document_kind)->get();
        return view('document.detail', [
            'document_kind' => $request->document_kind,
            'documents'     => $documents,
        ]);
    }

    function edit(Request $request) {
        $school = School::find($request->school_id);
        $document_kind = DocumentKind::tryFrom($request->document_kind);
        return view('document.edit', [
            'document_kind' => $document_kind,
            'school'        => $school,
        ]);
    }
}
