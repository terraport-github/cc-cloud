<?php
    $document = App\Models\Document::where('school_id', $school->id)->where('document_kind', $documentKind)->first();
    $context_name        = $documentKind->value . '[content]';
    $secret_content_name = $documentKind->value . '[secret_content]';
    $collapse_id = $isMulti ? 'collapse_' . $documentKind->value : '';
?>
<input type="hidden" name="isMulti" value="{{ $isMulti }}"/>
<div class="card shadow-sm mb-3">
    <div class="card-header heading" data-toggle="collapse" href="#{{ $collapse_id }}">{{ $documentKind?->label() ?? '' }}</div>

    <?php //未入力の種別はアコーディオンを閉じる ?>
    <div class="card-body collapse @if($document !== null && !(empty($document->content) && empty($document->secret_content))) show @endif" id="{{$collapse_id }}">
        <label>テキスト</label>
        <textarea name="{{ $context_name }}" class="form-control" rows="5">{{ old($documentKind->value . '.content', isset($document->content) ? $document->content : '') }}</textarea>

        <label>権限テキスト<span class="text-danger">*権限がある人のみ表示</span></label>
        <textarea name="{{ $secret_content_name }}" class="form-control" type="textarea" placeholder="パスワードなど" rows="3">{{ old($documentKind->value . '.secret_content', isset($document->secret_content) ? $document->secret_content : '') }}</textarea>

        {{-- <label>備考</label>
        <textarea class="form-control" type="textarea">一旦保留</textarea> --}}
    </div>
</div>
{{-- TODO: 後回し --}}
@error($context_name)
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error($secret_content_name)
    <div class="alert alert-danger">{{ $message }}</div>
@enderror