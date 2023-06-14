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
                <?php
                    $document = App\Models\Document::where('school_id', $school->id)->where('document_kind', $document_kind)->first();
                    $context_name        = $document_kind->value . '[content]';
                    $secret_content_name = $document_kind->value . '[secret_content]';
                    $collapse_id = 'collapse_' . $document_kind->value;
                ?>
                <div class="card shadow-sm mb-3">
                    <div class="card-header heading" data-toggle="collapse" href="#{{ $collapse_id }}">{{ $document_kind?->label() ?? '' }}</div>

                    <?php //未入力の種別はアコーディオンを閉じる ?>
                    <div class="card-body collapse @if($document !== null && !(empty($document->content) && empty($document->secret_content))) show @endif" id="{{$collapse_id }}">
                        <label>テキスト</label>
                        <textarea name="{{ $context_name }}" class="form-control" rows="5">{{ old($document_kind->value . '.content', isset($document->content) ? $document->content : '') }}</textarea>

                        <label>権限テキスト<span class="text-danger">*権限がある人のみ表示</span></label>
                        <textarea name="{{ $secret_content_name }}" class="form-control" type="textarea" placeholder="パスワードなど" rows="3">{{ old($document_kind->value . '.secret_content', isset($document->secret_content) ? $document->secret_content : '') }}</textarea>

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

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
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