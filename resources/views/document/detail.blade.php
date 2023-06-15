<x-layout.main>
    <?php $document_kind = App\Enums\DocumentKind::tryFrom($document_kind); ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
        <h1 class="h3">
            <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
            {{ $document_kind->label() }} 資料一覧
        </h1>
    </div>

    @foreach (App\Models\School::All() as $school)
        <?php 
            $document = $school->documents->where('document_kind', $document_kind)->first();
        ?>
        <div class="d-flex flex-row-reverse bd-highlight mb-2">
            <button class="btn btn-primary" onclick="location.href='{{ route('document.edit', ['school_id' => $school->id, 'document_kind' => $document_kind]) }}'">編集</button>
        </div>

        <div class="card shadow-sm mb-3">
            <div class="card-header heading">{{ $school->school_name ?? ''}}</div>
            <div class="card-body">
                @if($document)
                    <div>{!! nl2br(e($document->content ?? '')) !!}</div>
                    {{-- TODO: ログイン時の権限 --}}
                    <div>{!! nl2br(e($document->secret_content ?? '')) !!}</div>
                    <div class="small d-flex justify-content-end">更新者 {{ $document->user?->name ?? '' }}</div>
                    <div class="small d-flex justify-content-end">更新日時 {{ $document?->updated_at?->format('Y/m/d H:i') }}</div>
                @else

                @endif
            </div>
        </div>
    @endforeach
</x-layout.main>