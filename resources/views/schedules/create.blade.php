@extends('templates.template')
@section('contents')
@include('display_errors.error')
<form action="{{ route('schedules.store') }}" method="post">
    @include('templates.forms')
    <button type="submit">追加する</button>
    <a href="{{ route('schedules.index') }}">ホームに戻る</a>
</form>
@endsection()