@extends('templates.template')
@section('contents')
@include('display_errors.error')
<form action="{{ route('schedules.store') }}" method="post">
    @csrf 
    <dl class="form-list">
        <dt>内容</dt>
        <dd><textarea name="content" rows="5">{{ old('content') }}</textarea></dd>
        <dt>場所</dt>
        <dd><textarea name="place" rows="5">{{ old('place') }}</textarea></dd>
        <dt>開始日時</dt>
        <dd><input type="datetime-local" name="start_time" value="{{ old('start_time') }}"></dd>
        <dt>終了日時</dt>
        <dd><input type="datetime-local" name="end_time" value="{{ old('end_time') }}"></dd>
    </dl>
    <button type="submit">追加する</button>
    <a href="{{ route('schedules.index') }}">ホームに戻る</a>
</form>
@endsection()