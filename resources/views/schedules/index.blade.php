<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <header>
        <div class="app-title">スケジュール管理</div>
    </header>
    <main class="container">
        <p><a href="{{ route('schedules.create') }}">予定を追加する</a></p>
        @foreach ($schedules as $schedule)
        <article class="schedule-item">
            <hr>
            <div class="schedule-content">{{ $schedule->content }}</div>
            <div class="schedule-place">{{ $schedule->place }}</div>
            <div class="schedule-time">{{ $schedule->start_time }} ~ {{ $schedule->end_time }}</div>
        </article>
        @endforeach
    </main>
</body>
</html>