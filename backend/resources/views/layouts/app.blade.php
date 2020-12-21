<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KinddleWatcher') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-secondary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="d-flex align-items-center">
                        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" style="width:30px;height:30px" xml:space="preserve" opacity="1"><path class="st0" d="M184.297 115.479c21.824 6.823 39.669 20.913 52.011 39.309l1.722-9.817c6.339-30.336-7.542-63.542-38.33-73.158-30.788-9.608-61.109 9.791-73.166 38.339l-2.944 6.372c10.286-3.554 21.005-5.477 31.859-5.477 9.699 0 19.416 1.497 28.848 4.432zM60.34 321.976l60.356-60.348c-33.331 0-60.356 27.018-60.356 60.348zM275.676 154.755c12.359-18.362 30.204-32.452 52.028-39.276 9.432-2.936 19.132-4.432 28.832-4.432 10.854 0 21.591 1.923 31.875 5.494l-2.943-6.388c-12.058-28.548-42.378-47.947-73.167-38.339-30.772 9.616-44.669 42.822-38.331 73.158l1.706 9.783z" fill="#7f5e30"/><path class="st0" d="M391.304 201.272c-56.175 0-103.369 38.365-116.848 90.318-2.642-1.439-5.469-2.542-8.446-3.337a128.876 128.876 0 016.64-19.115l.134.811c20.085-45.538 65.625-77.439 118.522-77.439 25.972 0 50.172 7.718 70.475 20.954l-12.593-27.318c-19.584-46.391-68.852-77.925-118.89-62.296-36.993 11.556-58.951 44.101-63.718 80.208-3.294-1.27-6.84-2.007-10.586-2.007-3.729 0-7.292.736-10.57 2.007-4.766-36.107-26.725-68.651-63.734-80.208-50.021-15.628-99.29 15.905-118.89 62.296l-12.576 27.318c20.302-13.236 44.502-20.954 70.474-20.954 52.881 0 98.436 31.901 118.506 77.439l.15-.811a128.647 128.647 0 016.64 19.115c-2.976.794-5.82 1.898-8.462 3.337-13.48-51.953-60.658-90.318-116.833-90.318C54.035 201.272 0 255.315 0 321.976c0 66.653 54.035 120.696 120.696 120.696 53.751 0 99.273-35.137 114.893-83.694 5.937 3.671 12.911 5.82 20.403 5.82 7.51 0 14.466-2.149 20.42-5.82 15.62 48.558 61.142 83.694 114.892 83.694C457.966 442.672 512 388.63 512 321.976c0-66.661-54.034-120.704-120.696-120.704zM120.696 403.739c-45.154 0-81.763-36.609-81.763-81.763s36.609-81.762 81.763-81.762c45.171 0 81.763 36.608 81.763 81.762s-36.592 81.763-81.763 81.763zm270.608 0c-45.171 0-81.762-36.609-81.762-81.763s36.592-81.762 81.762-81.762c45.155 0 81.764 36.608 81.764 81.762s-36.609 81.763-81.764 81.763z" fill="#7f5e30"/><path class="st0" d="M330.948 321.976l60.356-60.348c-33.347 0-60.356 27.018-60.356 60.348z" fill="#7f5e30"/></svg>
                        <span id="logo">{{ config('app.name', 'KinddleWatcher') }}</span>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">新規登録</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(Auth::user()->file_name)
                                        <img src="{{ asset('/storage/images/'. Auth::user()->file_name) }}" alt="ユーザ画像" class="rounded-circle">
                                    @else
                                        <img src="{{ asset('/images/user_sample.png') }}" alt="ユーザ画像" class="rounded-circle">
                                    @endif
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('mypage.index') }}">マイリスト</a>
                                    <a class="dropdown-item" href="{{ route('config.index') }}">設定</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="text-center">
            <!-- Twitter -->
            <div class="d-inline-block">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- facebook -->
            <div class="d-inline-block">
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=small&width=103&height=20&appId" width="103" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <!-- はてな -->
            <div class="d-inline-block">
                <a href="https://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label-counter" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
            </div>
                <!-- Pocket -->
            <div class="d-inline-block">
                <a data-pocket-label="pocket" data-pocket-count="horizontal" class="pocket-btn" data-lang="en"></a>
                <script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
            </div>
            <div class="bg-white">
                <small>&copy; {{ config('app.name', 'KinddleWatcher') }}</small>
            </div>
        </footer>
    </div>
</body>
</html>
