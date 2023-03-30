<x-layout.main>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
            <h1 class="h3">
                <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                ○○学校 テキスト修正
            </h1>
        </div>
        <div class="card shadow-sm mb-3">
            <div class="card-header heading">編集フォーム案１</div>
            <div class="card-body">
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">本番</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">検収</label>
                    </div>
                </div>

                <label>テキスト</label>
                <textarea class="form-control" type="textarea" rows="15">
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
                </textarea>

                <label>パスワード<span class="text-danger">*権限がある人のみ表示</span></label>
                <textarea class="form-control" type="textarea" placeholder="パスワードなど" rows="3">
管理者用
kinjyo / kinjyo1234
                </textarea>

                <label>備考</label>
                <textarea class="form-control" type="textarea"></textarea>
            </div>
        </div>

        <div class="card shadow-sm mb-3">
            <div class="card-header heading">編集フォーム案２</div>
            <div class="card-body">
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">本番</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">検収</label>
                    </div>
                </div>

                <label>テキスト</label>
                <input class="form-control" type="textarea" value="▼ 合否発表システム"/>
                <label>URL</label>
                <input class="form-control" type="textarea" value="http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/"/>
                <label>パスワード<span class="text-danger">*権限がある人のみ表示</span></label>
                <textarea class="form-control" type="textarea" placeholder="パスワードなど" rows="3">
管理者用
kinjyo / kinjyo1234
                </textarea>
                <label>テキスト</label>
                <input class="form-control" type="textarea" value="管理者用"/>
                <label>URL</label>
                <input class="form-control" type="textarea" value="http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/admin/"/>
                <label>パスワード<span class="text-danger">*権限がある人のみ表示</span></label>
                <textarea class="form-control" type="textarea" placeholder="パスワードなど" rows="3">
管理者用
kinjyo / kinjyo1234
                </textarea>

                <label>備考</label>
                <textarea class="form-control" type="textarea"></textarea>
            </div>
        </div>
    </main>
</x-layout.main>