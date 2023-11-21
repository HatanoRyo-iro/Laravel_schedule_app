@extends('templates.template')
@section('contents')
<h1>ログイン</h1>
@include('display_errors.error')

<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">メールアドレス</label>
        <input type="email" class="form-control" id="loginEmail" name="email" value="{{ old('email') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">パスワード</label>
        <input type="password" class="form-control" id="loginPassword" name="password">
    </div>
    <button type="submit" class="btn btn-outline-secondary">ログイン</button>
    <div class="text-success">
        <hr>
    </div>
    <div class="register">
        <p>まだアカウントを持っていませんか？</p>
        <a href="{{ route('register') }}" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">新規作成はこちら</a>
    </div>
</form>
</div>
@endsection()