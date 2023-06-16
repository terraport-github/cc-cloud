<x-layout.main>
        <x-slot:titleMain>
            {{ $school->school_name }} 仕様書編集
        </x-slot:titleMain>
    
        <x-slot:breadcrumb>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
                <li class="breadcrumb-item"><a href="{{ route('school') }}">各校</a></li>
                <li class="breadcrumb-item"><a href="{{ route('school.detail', ['school_id' => $school->id]) }}">資料一覧</a></li>
                <li class="breadcrumb-item active">仕様書編集</li>
            </ol>
        </x-slot:breadcrumb>

        <form action="{{ route('school.post', ['school_id' => $school->id]) }}" method="POST">
            @csrf

            @foreach (App\Enums\DocumentKind::cases() as $document_kind)
                <x-edit.document_form :school=$school :documentKind=$document_kind :isMulti=true />
            @endforeach

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
</x-layout.main>