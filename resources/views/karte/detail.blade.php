<x-layout.main>
    <x-slot:titleMain>
        {{ $school->school_name }} カルテ
    </x-slot:titleMain>

    <x-slot:breadcrumb>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">ホーム</a></li>
            <li class="breadcrumb-item"><a href="{{ route('school') }}">カルテ 各校</a></li>
            <li class="breadcrumb-item active">カルテ</li>
        </ol>
    </x-slot:breadcrumb>

    <div class="d-flex flex-row-reverse bd-highlight mb-2">
        <button class="btn btn-primary" onclick="location.href='{{ route('school.edit', ['school_id' => $school->id]) }}'">編集</button>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">学校情報</div>
        <div class="card-body">
            <table>
                <tr>
                    <th class="col-xs-4">学校名（システムでの表記）</th>
                    <td class="col-xs-8">日本電子専門学校</td>
                </tr>
                <tr>
                    <th class="col-xs-4">出願システム呼称</th>
                    <td class="col-xs-8">WEB出願</td>
                </tr>
                <tr>
                    <th class="col-xs-4">入試のお問い合わせ先</th>
                    <td class="col-xs-8">日本電子専門学校<br>
                        入学相談室<br>
                        TEL：0120-00-9691(フリーダイヤル)<br>
                        E-mail：jp@je.ac.jp
                        </td>
                </tr>
                <tr>
                    <th class="col-xs-4">出願システム呼称</th>
                    <td class="col-xs-8">WEB出願</td>
                </tr>
                <tr>
                    <th class="col-xs-4">公式HP URL</th>
                    <td class="col-xs-8">
                        <a href="https://www.jec.ac.jp/">https://www.jec.ac.jp/</a>
                    </td>
                </tr>
                <tr>
                    <th class="col-xs-4">プライバシーポリシー URL</th>
                    <td class="col-xs-8">
                        <a href="https://www.jec.ac.jp/privacy-policy/">https://www.jec.ac.jp/privacy-policy/</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">学校情報</div>
        <div class="card-body">
            <a href="{{ route('school') }}">ここの仕様がわからん 1100_基本情報に遷移
                接続情報<br>
                ・本番URL<br>
                ・検収URL<br>
                ・各種ID/PASS<br>
            </a>
        </div>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">本番情報</div>
        <div class="card-body">
            フォーマットを決める？
            カルテの情報と各校->検収・本番URLの情報は別？構造敵に同じは難しい
        </div>
    </div>
    <div class="card shadow-sm mb-3">
        <div class="card-header heading">検収情報</div>
        <div class="card-body">
        </div>
    </div>
</x-layout.main>

<style>
    table {
        border-collapse: collapse;
        border-top: 1px solid #333;
        border-right: 1px solid #333;
    }

    table th,
    table td{
        padding: 8px;
        font-weight: normal;
        border-left: 1px solid #333;
        border-bottom: 1px solid #333;
    }
    table th{
        background-color: #CDEAFF;
    }
    table td{
        background-color: #fbf9f9;
    }
</style>