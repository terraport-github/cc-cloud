<div class="card shadow-sm mb-3">
    <div class="card-header heading">{{ (isset($title) ? $title : $document->document_kind?->label()) ?? ''}}</div>
    <div class="card-body">
        <div>{!! Helper::URLtoHTML(nl2br(e($document->content ?? ''))) !!}</div>
        
        {{-- TODO: ログイン時の権限 --}}
        <div>{!! nl2br(e($document->secret_content ?? '')) !!}</div>
        <div class="small d-flex justify-content-end">更新者 {{ $document->user?->name ?? '' }}</div>
        <div class="small d-flex justify-content-end">更新日時 {{ $document?->updated_at?->format('Y/m/d H:i') }}</div>
    </div>
</div>