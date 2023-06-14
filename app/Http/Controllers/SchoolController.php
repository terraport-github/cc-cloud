<?php

namespace App\Http\Controllers;

use App\Enums\DocumentKind;
use App\Http\Requests\SchoolDocumentRequest;
use App\Models\Document;
use App\Models\School;
use Illuminate\Http\Request;
use DB;

class SchoolController extends Controller
{
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
        return view('school.edit', [
            'school' => $school,
        ]);
    }

    function post(SchoolDocumentRequest $request) {
        DB::transaction(function () use($request) {
            $input = $request->validated();
            foreach(DocumentKind::cases() as $document_kind) {
                // どちらかに入力値がある場合
                if (!empty($input[$document_kind->value])) {
                    $document = Document::where('school_id', $request->school_id)
                        ->where('document_kind', $document_kind)
                        ->first();
                    Document::updateOrCreate(
                        ['id' => $document?->id], 
                        [
                            'school_id' => $request->school_id,
                            'content' => $input[$document_kind->value]['content'] ?? '',
                            'secret_content' => $input[$document_kind->value]['secret_content'] ?? '',
                            'document_kind'  => $document_kind,
                            'permission_level' => 2,
                            'user_id' => 1
                        ],
                    );
                }
            }
        });
        return redirect(route('school.detail', ['school_id' => $request->school_id]))->with('success', '更新が完了しました');
    }
}
