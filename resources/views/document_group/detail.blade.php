<?php 
    $document_kind = $documentGroupDetail->document_kind; 
    $documentGroup = $documentGroupDetail->documentGroup;
?>
<x-layout.main>
    <x-slot:titleMain>
        {{ $document_kind->label() }} 資料一覧
    </x-slot:titleMain>

    <x-slot:breadcrumb>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
            <li class="breadcrumb-item"><a href="{{ route('document_group', ['document_group_id' => $documentGroup]) }}">{{ $documentGroup->title ?? '' }}</a></li>
            <li class="breadcrumb-item active">{{ $document_kind->label() }} 資料一覧</li>
        </ol>
    </x-slot:breadcrumb>

    @foreach (App\Models\School::All() as $school)
        <?php 
            $document = $school->documents->where('document_kind', $document_kind)->first();
        ?>

        <div class="card shadow-sm mb-3">
            <?php $school_name = $school->school_name ?>
            <div class="card-header heading d-flex justify-content-between">
                <span style="margin:auto 0">{{ (isset($school_name) ? $school_name : $document_kind?->label()) ?? ''}}</span>
                <button class="btn btn-primary" onclick="location.href='{{ route('document_group.edit', ['school_id' => $school->id, 'document_group_detail_id' => $documentGroupDetail->id]) }}'">編集</button>
            </div>

            <x-document.detail :title=$school_name :document=$document/>
        </div>
        
    @endforeach
</x-layout.main>