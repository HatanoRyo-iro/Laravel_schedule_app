@extends('templates.template')
@section('contents')
@include('display_errors.error')
<h1>ホーム</h1>
<p>ようこそ，{{ Auth::user()->name }}さん</p>
<p><a href="{{ route('schedules.index') }}">スケジュール一覧</a></p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">ログアウト</button>
</form>
@endsection()