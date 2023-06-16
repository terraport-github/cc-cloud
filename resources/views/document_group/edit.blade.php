<x-layout.main>
        <x-slot:titleMain>
            {{ $school->school_name }} 仕様書編集
        </x-slot:titleMain>
    
        <x-slot:breadcrumb>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
                <li class="breadcrumb-item"><a href="{{ route('document_group', ['document_group_id' => $documentGroup]) }}">{{ $documentGroup->title ?? '' }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('document_group.detail', ['document_group_detail_id' => $documentGroupDetail->id ]) }}">{{ $document_kind->label() }} 資料一覧</a></li>
                <li class="breadcrumb-item active">{{ $school->school_name }} 仕様書編集</li>
            </ol>
        </x-slot:breadcrumb>

        <form action="{{ route('school.post', ['school_id' => $school->id]) }}" method="POST">
            @csrf
            <x-edit.document_form :school=$school :documentKind=$document_kind :isMulti=false/>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
</x-layout.main>