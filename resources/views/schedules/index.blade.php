@extends('templates.template')
@section('contents')
<p>ようこそ，{{ Auth::user()->name }}さん</p>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">ログアウト</button>
</form>
<p><a href="{{ route('schedules.create') }}">予定を追加する</a></p>
@foreach ($schedules as $schedule)
<article class="schedule-item">
    <hr>
    <div class="schedule-content">{{ $schedule->content }}</div>
    <div class="schedule-place">{{ $schedule->place }}</div>
    <div class="schedule-time">{{ $schedule->start_time }} ~ {{ $schedule->end_time }}</div>
    <div class="schedule-create-user">
        作成者：{{ $schedule->user->name }}
    </div>
    @can('update', $schedule)
    <div class="schedule-edit">
        <a href="{{ route('schedules.edit', $schedule) }}">編集</a>
        @can('delete', $schedule)
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('schedules.destroy', $schedule) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
        </form>
        @endcan
    </div>
    @endcan
</article>
@endforeach
@endsection()