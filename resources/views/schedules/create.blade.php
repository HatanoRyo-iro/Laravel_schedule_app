@extends('templates.template')
@section('contents')
<h1>予定作成</h1>
@include('display_errors.error')
<form action="{{ route('schedules.store') }}" method="post">
    @include('templates.forms')
    <button class="btn btn-outline-success" type="submit">追加する</button>
    <a href="{{ route('schedules.index') }}">ホームに戻る</a>
</form>
@endsection()