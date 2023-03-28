
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CC-クラウド | 仕様書一覧</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/school.css" rel="stylesheet">
    </head>
    <body>
        <header class="navbar sticky-top flex-md-nowrap p-0 shadow-sm">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/home"><img src="/img/icon.png" alt="CC-クラウド" width="50"></a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-title w-100 d-md-none">
                <span class="px-3">管理画面</span>
            </div>
            <div class="navbar-title w-50 d-none d-md-block">
                <span class="px-3">管理画面</span>
            </div>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <div class="user mx-2 mx-md-4">
                        <a class="dropdown-toggle px-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg class="bi flex-shrink-0" width="20" height="20" style="margin: -2px 2px 0 0;"><use xlink:href="#symbol-person-circle"/></svg>
                            山田太郎さん
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mx-2" style="position: absolute;">
                            <li><a class="dropdown-item" href="#">プロフィール変更</a></li>
                            <li><a class="dropdown-item" href="#">パスワード変更</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">ログアウト</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <x-layout.sidebar/>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-2 mb-2">
                        <h1 class="h3">
                            <svg class="bi flex-shrink-0" width="24" height="24" style="margin: 0 2px 4px 0;"><use xlink:href="#symbol-clipboard-data"/></svg>
                            ダッシュボード
                        </h1>
                    </div>

                    <div class="card shadow-sm mb-3">
                        <div class="card-header heading">仕様書一覧</div>
                        <div class="card-body">
                            <div class="row">
                                    <a href="/schools/01/detail">金城学院</a>
                                    <a href="">聖霊</a>
                                    <a href="">奈良学園登美ヶ丘</a>
                                    <a href="">南山女子</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
