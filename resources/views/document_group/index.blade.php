<x-layout.main>
    <x-slot:titleMain>
        {{ $documentGroup->title }}  資料一覧
    </x-slot:titleMain>

    <x-slot:breadcrumb>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
            <li class="breadcrumb-item active">{{ $documentGroup->title }}  資料一覧</li>
        </ol>
    </x-slot:breadcrumb>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">資料一覧</div>
        <div class="card-body">
            <div class="row">
                    @foreach ($documentGroup->documentGroupDetails as $documentGroupDetail)
                        <a href="{{ route('document_group.detail', ['document_group_detail_id' => $documentGroupDetail->id]) }}">{{  $documentGroupDetail->document_kind->label() ?? ''}}</a>
                    @endforeach
            </div>
        </div>
    </div>
</x-layout.main>