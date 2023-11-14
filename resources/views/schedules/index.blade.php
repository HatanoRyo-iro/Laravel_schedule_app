@extends('templates.template')
@section('contents')
<p><a href="{{ route('schedules.create') }}">予定を追加する</a></p>
@foreach ($schedules as $schedule)
<article class="schedule-item">
    <hr>
    <div class="schedule-content">{{ $schedule->content }}</div>
    <div class="schedule-place">{{ $schedule->place }}</div>
    <div class="schedule-time">{{ $schedule->start_time }} ~ {{ $schedule->end_time }}</div>
    <div class="schedule-edit">
        <a href="{{ route('schedules.edit', $schedule) }}">編集</a>
    </div>
    <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('schedules.destroy', $schedule) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">削除</button>
    </form>
</article>
@endforeach
@endsection()