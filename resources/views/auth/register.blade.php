@extends('templates.template')
@section('contents')
<h1>新規作成</h1>
@include('display_errors.error')
<form action="{{ route('register') }}" method="post">
    @csrf 
    <div class="mb-3">
        <label class="form-label">名前</label>
        <input type="text" class="form-control" id="registerUsername" name="name" value="{{ old('name') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">メールアドレス</label>
        <input type="email" class="form-control" id="registerEmail" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">パスワード</label>
        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="8桁以上">
    </div>
    <div class="mb-3">
        <label class="form-label">パスワード(確認用)</label>
        <input type="password" class="form-control" id="registerPasswordConfirmation" name="password_confirmation" placeholder="もう一度入力">
    </div>
<button type="submit" class="btn btn-outline-secondary">登録する</button>
<div class="text-success">
    <hr>
</div>
<div class="login">
    <p>すでにアカウントをお持ちですか？</p>
    <a href="{{ route('login') }}" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">ログインはこちら</a>
</form>
@endsection()