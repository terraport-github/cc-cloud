<x-layout.main>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
            <h1 class="h3">
                <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                {{ $school->school_name }} 資料一覧
            </h1>
        </div>
        <div class="d-flex flex-row-reverse bd-highlight">
            <button class="btn btn-primary" onclick="location.href='{{ route('school.edit', ['school_id' => $school->id]) }}'">テキスト修正</button>
        </div>
        <div class="card shadow-sm mb-3">

                @forelse ($school->documents as $document)
                    <div class="card-header heading">{{ $document->docuent_kind?->label() ?? ''}}</div>
                    <div class="card-body">
                        <div>{{  $document->content ?? ''}}</div>
                        {{-- TODO: ログイン時の権限 --}}
                        <div>{{  $document->secret_content ?? '' }}</div>
                        <div>最終利用者 倉本</div>
                        <div>最終利用者 更新日時20230613 15：56</div>
                    </div>
                @empty
                    <div>データがありません</div>
                @endforelse
        </div>
    </main>
</x-layout.main>