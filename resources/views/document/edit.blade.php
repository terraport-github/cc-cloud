<x-layout.main>
        <x-slot:titleMain>
            {{ $school->school_name }} 仕様書編集
        </x-slot:titleMain>
    
        <x-slot:breadcrumb>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
                <li class="breadcrumb-item"><a href="{{ route('document', ['document_kind' => $document_kind ]) }}">{{ $document_kind->label() }}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('document.detail', ['document_kind' => $document_kind]) }}">{{ $document_kind->label() }} 一覧</a></li>
                <li class="breadcrumb-item active">{{ $school->school_name }} 仕様書編集</li>
            </ol>
        </x-slot:breadcrumb>

        <form action="{{ route('school.post', ['school_id' => $school->id]) }}" method="POST">
            @csrf
            <x-edit.document_form :school=$school :documentKind=$document_kind :isMulti=false/>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
</x-layout.main>