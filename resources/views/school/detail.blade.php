<x-layout.main>
        <x-slot:titleMain>
            {{ $school->school_name }} 資料一覧
        </x-slot:titleMain>
    
        <x-slot:breadcrumb>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
                <li class="breadcrumb-item"><a href="{{ route('school') }}">各校</a></li>
                <li class="breadcrumb-item active">資料一覧</li>
            </ol>
        </x-slot:breadcrumb>

        <div class="d-flex flex-row-reverse bd-highlight mb-2">
            <button class="btn btn-primary" onclick="location.href='{{ route('school.edit', ['school_id' => $school->id]) }}'">編集</button>
        </div>

        @forelse ($school->documents as $document)
            <div class="card shadow-sm mb-3">
                <?php $school_name = $school->school_name ?>
                <div class="card-header heading d-flex justify-content-between">
                    <span style="margin:auto 0">{{ (isset($school_name) ? $school_name : $document_kind?->label()) ?? ''}}</span>
                </div>

                <x-document.detail :document=$document/>
            </div>
            
        @empty
            <div>データがありません</div>
        @endforelse
</x-layout.main>