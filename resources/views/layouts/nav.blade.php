<nav class="navbar navbar-expand-sm navbar-light border-bottom py-3 bg-white mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BOOQ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('login')}}">ログイン</a>
                </li>
                @endguest
                @guest
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('register')}}">新規登録</a>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown me-2">
                    <div class="btn-group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class="far fa-user-circle fa-2x"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-lg-end">
                            <li><a class="dropdown-item" href="#">マイページ</a></li>
                            <li>
                                <hr class="dropdown-divider">
                                <button form="logout-button" class="dropdown-item" type="submit">
                                    ログアウト
                                </button>
                                <form id="logout-button" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                @endauth
                <form class="d-flex align-items-center" action="{{ route('books.search') }}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="本を検索" aria-label="Search" aria-describedby="button-addon2" name="keyword" value="{{$content ?? old('content')}}">
                        <button class="btn btn-outline-secondary" type="hidden" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </ul>
        </div>
    </div>
</nav>
