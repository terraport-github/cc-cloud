
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CC-クラウド | ダッシュボード</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="css/school.css" rel="stylesheet">
    </head>

    <body>
        <header class="navbar sticky-top flex-md-nowrap p-0 shadow-sm">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 disp-img" href="/home"></a>
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
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    <!-- フラッシュメッセージ -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h1>{{ $titleMain ?? '' }}</h1>
                    <div class="d-md-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-2 pb-md-2">
                        @if(isset($breadcrumb))
                            <div class="btn-toolbar align-middl">
                                <nav style="--bs-breadcrumb-divider: '>';">
                                    {{ $breadcrumb }}
                                </nav>
                            </div>
                        @endif
                    </div>

                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>

<style>
    .primary-image-color{
        background-color: #405DA9;
    }
    .nav-link{
        color: #ffffff;
    }
    .nav-tabs {
        background-color: #8b9ecd;
    }
    .nav-item.active {
        background-color: #5E7DCD;
    }
    .disp-img {
        width: 80px;
        height: 40px;
        background-size: cover;
        background-image:url('http://cc-cloud.local/img/icon.png');
    }
    .disp-img:hover {
        background-image:url('http://cc-cloud.local/img/icon2.png');
    }
</style>
