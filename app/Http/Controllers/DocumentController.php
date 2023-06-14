<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function index() {
        return view('document.index');
    }

    function detail(Request $request) {
        $documents = Document::where('document_kind', $request->document_kind)->get();
        // dd( $documents,$request->document_kind);
        return view('document.detail', [
            'document_kind' => $request->document_kind,
            'documents' => $documents,
        ]);
    }

    function edit(Request $request) {
        $document = Document::where('document_kind', $request->document_kind)->where('school_id', $request->school_id)->first();
        return view('document.edit', [
            'document' => $document,
        ]);
    }
}
