<x-layout.main>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
            <h1 class="h3">
                <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                {{ $school->school_name }} 仕様書編集
            </h1>
        </div>
        <form action="{{ route('school.post', ['school_id' => $school->id]) }}" method="POST">
            @csrf

            @foreach ($school?->documents ?? [] as $document)
                <?php
                    $context_name        = "content[" . $document->document_kind->value . "]";
                    $secret_content_name = "secret_content[" . $document->document_kind->value . "]";
                ?>
                <div class="card shadow-sm mb-3">
                    <div class="card-header heading">{{ $document->document_kind?->label() ?? '' }}</div>
                    <div class="card-body">
                        <label>テキスト</label>
                        <textarea name="{{ $context_name }}" class="form-control" type="textarea" rows="5">{{ old($context_name, $document->content) }}</textarea>

                        <label>権限テキスト<span class="text-danger">*権限がある人のみ表示</span></label>
                        <textarea name="{{ $secret_content_name }}" class="form-control" type="textarea" placeholder="パスワードなど" rows="3">{{ old($secret_content_name, $document->secret_content) }}</textarea>

                        {{-- <label>備考</label>
                        <textarea class="form-control" type="textarea">一旦保留</textarea> --}}
                    </div>
                </div>
                {{-- TODO: 後回し --}}
                @error($context_name)
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error($secret_content_name)
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endforeach
            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </main>
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