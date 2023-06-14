<x-layout.main>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
        <h1 class="h3">
            <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
            資料一覧
        </h1>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">資料一覧</div>
        <div class="card-body">
            <div class="row">
                    @foreach (App\Enums\DocumentKind::cases() as $document_kind)
                        <a href="{{ route('document.detail', ['document_kind' => $document_kind]) }}">{{  $document_kind->label() ?? ''}}</a>
                    @endforeach
            </div>
        </div>
    </div>
</x-layout.main>