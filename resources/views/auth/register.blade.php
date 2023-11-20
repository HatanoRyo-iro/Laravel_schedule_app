@extends('templates.template')
@section('contents')
<h1>新規作成</h1>
@include('display_errors.error')
<form action="{{ route('register') }}" method="post">
    @csrf 
    <dl class="form-list">
        <dt>名前</dt>
        <dd><input type="text" name="name" value="{{ old('name') }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
        <dt>パスワード（確認用）</dt>
        <dd><input type="password" name="password_confirmation" placeholder="もう一度入力"></dd>
    </dl>
<button type="submit">登録する</button>
<hr>
<div class="login">
    <p>すでにアカウントをお持ちですか？</p>
    <a href="{{ route('login') }}">ログインはこちら</a>
</form>
@endsection()