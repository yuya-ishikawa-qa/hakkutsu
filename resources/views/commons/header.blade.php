<header class="mb-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a href="" class="nav-link"><img src="{{ asset('image/logo.png') }}" width="250" alt="logo.png"></a>
            <div class="collapse navbar-collapse justify-content-left" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            カテゴリーから探す
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">肉</a>
                            <a class="dropdown-item" href="#">魚</a>
                            <a class="dropdown-item" href="#">野菜</a>
                            <a class="dropdown-item" href="#">果物</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link">店舗から探す</a></li>
                    <li class="nav-item"><a href="" class="nav-link">お問い合わせ</a></li>
                </ul>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse nav-pills" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link mr-3">マイページ</a></li>
                    <button type="button" class="btn btn-danger">新規登録</button>
                </ul>
            </div>
        </div>
        <form class="form-inline my-2 my-lg-0 mr-5">
            <input class="form-control mr-sm-2" type="search" placeholder="キーワードから検索" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
        </form>
    </nav>


</header>