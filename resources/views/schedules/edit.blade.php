@extends('templates.template')
@section('contents')
@include('display_errors.error')
<form action="{{ route('schedules.update', $schedule) }}" method="post">
    @method('patch')
    @include('templates.forms')
    <button class="btn btn-outline-success" type="submit">更新する</button>
    <a href="{{ route('schedules.index') }}">ホームに戻る</a>
</form>
@endsection()