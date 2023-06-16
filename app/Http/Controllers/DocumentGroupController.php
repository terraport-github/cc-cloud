<?php

namespace App\Http\Controllers;

use App\Enums\DocumentKind;
use App\Models\Document;
use App\Models\DocumentGroup;
use App\Models\DocumentGroupDetail;
use App\Models\School;
use Illuminate\Http\Request;

class DocumentGroupController extends Controller
{
    function index($document_group_id) {
        $documentGroup = DocumentGroup::find($document_group_id);
        return view('document_group.index',[
            'documentGroup' => $documentGroup,
        ]);
    }

    function detail($document_group_detail_id) {
        $documentGroupDetail = DocumentGroupDetail::find($document_group_detail_id);
        return view('document_group.detail', [
            'documentGroupDetail' => $documentGroupDetail,
        ]);
    }

    function edit(Request $request) {
        $school = School::find($request->school_id);
        $documentGroupDetail = DocumentGroupDetail::find($request->document_group_detail_id);
        $document_kind = $documentGroupDetail->document_kind;
        $documentGroup = $documentGroupDetail->documentGroup;

        return view('document_group.edit', [
            'school'              => $school,
            'document_kind'       => $document_kind,
            'documentGroupDetail' => $documentGroupDetail,
            'documentGroup'       => $documentGroup,
        ]);
    }
}
