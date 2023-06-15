<x-layout.main>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
            <h1 class="h3">
                <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                {{ $school->school_name }} 仕様書編集
            </h1>
        </div>
        <form action="{{ route('school.post', ['school_id' => $school->id]) }}" method="POST">
            @csrf

            {{-- App\Enums\DocumentKind::cases() --}}
            @foreach (App\Enums\DocumentKind::cases() as $document_kind)
                <x-edit.document_form :school=$school :documentKind=$document_kind :isMulti=true />
            @endforeach

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
</x-layout.main>

{{-- <textarea class="form-control" type="textarea" rows="15">
    ▼ 合否発表システム
    http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/
    ▼ Web出願システム
    http://candy-ac.kont5.com/entry/html/index.php/kinjo-gakuin/junior/
    
    アプリ経由用
    http://candy-ac.kont5.com/entry/html/index.php/kinjo-gakuin/junior/?_app=1
    
    管理者用
    http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/admin/
    http://candy-ac.kont5.com/entry/html/index.php/kinjo-gakuin/admin/
    
    初期データ登録用
    http://candy-ac.kont5.com/terraport/html/index.php/tasks/register_kinjyo
</textarea> --}}