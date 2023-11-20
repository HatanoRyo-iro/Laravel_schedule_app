@extends('templates.template')
@section('contents')
<h1>ログイン</h1>
@include('display_errors.error')
<form action="{{ route('login') }}" method="post">
    @csrf 
    <dl class="form-list">
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
    </dl>
    <button type="submit">ログイン</button>
    <hr>
    <div class="register">
        <p>まだアカウントを持っていませんか？</p>
        <a href="{{ route('register') }}">新規作成はこちら</a>
    </div>
</form>
@endsection()