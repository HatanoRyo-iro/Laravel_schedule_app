<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>スケジュール管理アプリ</title>
    </head>
    <body class="container">
        @if (Route::has('login'))
            <div class="body">
                @auth
                    <a href="{{ url('/schedules') }}" class="schedule">一覧へ</a>
                @else
                    <a href="{{ route('login') }}" class="login">ログイン</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="register">新規登録</a>
                    @endif
                @endauth
            </div>
        @endif
    </body>
</html>
