
<x-layout.main>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
        <h1 class="h3">
            <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
            ダッシュボード
        </h1>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-header heading">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#item1">検収環境</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#item2">本番環境</a>
                </li>
            </ul>
        </div>

        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="item1">
                    <div>
                        検収環境の情報(静的)<br>
                        URL一覧など<br>
                        金城<br>
                        <a target="_blank" href="http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/admin/">http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/admin/</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="item2">
                    <div>
                        本番環境の情報(静的)<br>
                        URL一覧など<br>
                        金城<br>
                        <a target="_blank" href="http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/admin/">http://candy-ac.kont5.com/look/html/index.php/kinjo-gakuin/admin/</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.main>
