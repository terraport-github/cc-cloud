<?php
    $document = App\Models\Document::where('school_id', $school->id)->where('document_kind', $documentKind)->first();
    $context_name        = $documentKind->value . '[content]';
    $context_old_name    = $documentKind->value . '.content';

    $secret_content_name     = $documentKind->value . '[secret_content]';
    $secret_context_old_name = $documentKind->value . '.secret_content';
    $collapse_id = $isMulti ? 'collapse_' . $documentKind->value : '';
?>
<input type="hidden" name="isMulti" value="{{ $isMulti }}"/>
<div class="card shadow-sm mb-3">
    <div class="card-header heading" data-toggle="collapse" href="#{{ $collapse_id }}">{{ $documentKind?->label() ?? '' }}</div>

    <?php //単体で修正する場合 または 入力している項目が有れば 閉じないようにする ?>
    <div class="card-body collapse @if(!$isMulti || ($document !== null && !(empty($document->content) && empty($document->secret_content)))) show @endif" id="{{$collapse_id }}">
        <label>テキスト</label>
        <textarea name="{{ $context_name }}" class="form-control @error($context_old_name) is-invalid @enderror" rows="5">{{ old($context_old_name, isset($document->content) ? $document->content : '') }}</textarea>
        @error($context_old_name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        <label>権限テキスト<span class="text-danger">*権限がある人のみ表示</span></label>
        <textarea name="{{ $secret_content_name }}" class="form-control @error($secret_context_old_name) is-invalid @enderror" type="textarea" placeholder="パスワードなど" rows="3">{{ old($secret_context_old_name, isset($document->secret_content) ? $document->secret_content : '') }}</textarea>
        @error($secret_context_old_name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        {{-- <label>備考</label>
        <textarea class="form-control" type="textarea">一旦保留</textarea> --}}
    </div>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        // textareaタグを全て取得
        const textareaEls = document.querySelectorAll("textarea");

        textareaEls.forEach((textareaEl) => {
            // デフォルト値としてスタイル属性を付与
            textareaEl.setAttribute("style", `height: ${textareaEl.scrollHeight}px;`);
            // inputイベントが発生するたびに関数呼び出し
            textareaEl.addEventListener("input", setTextareaHeight);
        });

        // textareaの高さを計算して指定する関数
        function setTextareaHeight() {
            this.style.height = "auto";
            this.style.height = `${this.scrollHeight}px`;
        }
    });
</script>