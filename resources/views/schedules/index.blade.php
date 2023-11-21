@extends('templates.template')
@section('contents')
<h1>予定一覧</h1>
<div class="userinfo">
    <h5>ようこそ，{{ Auth::user()->name }}さん</h5>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-dark">ログアウト</button>
    </form>
</div>
<p><a href="{{ route('schedules.create') }}">予定を追加する</a></p>
@foreach ($schedules as $schedule)
<article class="schedule-item">
    <hr>
    <div class="schedule-content">予定：{{ $schedule->content }}</div>
    <div class="schedule-place">場所：{{ $schedule->place }}</div>
    <div class="schedule-time">期限：{{ \Carbon\Carbon::parse($schedule->start_time)->format('Y/m/d H:i') }} ~ {{ \Carbon\Carbon::parse($schedule->end_time)->format('Y/m/d H:i') }}</div>
    @can('update', $schedule)
    <div class="schedule-edit">
        <a href="{{ route('schedules.edit', $schedule) }}" type="button" class="btn btn-outline-success">編集</a>
        @can('delete', $schedule)
        <form action="{{ route('schedules.destroy', $schedule) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">削除</button>
        </form>
        @endcan
    </div>
    @endcan
</article>
@endforeach
@endsection()