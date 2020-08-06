<header class="mb-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a href="/" class="nav-link"><img src="{{ asset('image/logo.png') }}" width="250" alt="logo.png"></a>
            <div class="collapse navbar-collapse justify-content-left" id="nav-bar">
                <ul class="navbar-nav">
                    <li class="nav-item">{!! link_to_route('stores.index', '店舗から探す', [], ['class' => 'nav-link']) !!}</li>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="キーワードから検索" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
                    </form>
                </ul>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse nav-pills" id="nav-bar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">

                    @if (Auth::check())

                    <li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('users.index', 'マイページ', [], ['class' => 'nav-link']) !!}</li>

                    @else

                    <li class="nav-item">{!! link_to_route('signup', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>

                    @endif

                </ul>
            </div>
            <div class="shopping_cart">
                <a href="cart/index" class="nav-link"><img src="{{ asset('image/shopping_cart.png') }}" width="50" alt="shopping_cart.png"></a>
            </div>
        </div>
    </nav>
</header>