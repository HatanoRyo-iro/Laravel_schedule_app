<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <header>
        <div class="site-title">スケジュール管理</div>
    </header>
    <main class="container">
        @foreach ($schedules as $schedule)
        <article class="schedule-item">
            <div class="schedule-content">{{ $schedule->content }}</div>
            <div class="schedule-place">{{ $schedule->place }}</div>
        </article>
        @endforeach
    </main>
</body>
</html>