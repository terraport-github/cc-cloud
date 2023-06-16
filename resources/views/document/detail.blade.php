<x-layout.main>
    <?php $document_kind = App\Enums\DocumentKind::tryFrom($document_kind); ?>
    <x-slot:titleMain>
        {{ $document_kind->label() }} 資料一覧
    </x-slot:titleMain>

    <x-slot:breadcrumb>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
            <li class="breadcrumb-item"><a href="{{ route('school') }}">各校</a></li>
            <li class="breadcrumb-item active">{{ $document_kind->label() }} 資料一覧</li>
        </ol>
    </x-slot:breadcrumb>

    @foreach (App\Models\School::All() as $school)
        <?php 
            $document = $school->documents->where('document_kind', $document_kind)->first();
        ?>
        <div class="d-flex flex-row-reverse bd-highlight mb-2">
            <button class="btn btn-primary" onclick="location.href='{{ route('document.edit', ['school_id' => $school->id, 'document_kind' => $document_kind]) }}'">編集</button>
        </div>

        @if($document)
            <?php $school_name = $school->school_name ?>
            <x-document.detail :title=$school_name :document=$document/>
        @else
            <div class="card shadow-sm mb-3">
                <div class="card-header heading">{{ $school->school_name ?? ''}}</div>
            </div>
        @endif

    @endforeach
</x-layout.main>