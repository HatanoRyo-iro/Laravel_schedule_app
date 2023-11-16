@extends('templates.template')
@section('contents')
<h1>ユーザー新規作成</h1>
@include('display_errors.error')
<form action="{{ action('register') }}" method="post">
    @csrf
    <dl class="form-list">
        <dt>名前</dt>
        <dd><input type="text" name="name" value="{{ old('name') }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input type="email" name="email" value="{{ old('email') }}"></dd>
        <dt>パスワード</dt>
        <dd><input type="password" name="password"></dd>
        <dt>パスワード（確認）</dt>
        <dd><input type="password" name="password_confirmation"></dd>
    </dl>
    <button type="submit">新規作成</button>
    <a href="/">キャンセル</a>
</form>
