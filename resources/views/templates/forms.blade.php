@csrf 
<div class="schedule-create">
    <div class="mb-3">
    <label class="form-label">内容</label>
    <dd><textarea class="form-control" name="content" rows="5">{{ old('content', $schedule->content) }}</textarea></dd>
    </div>
    <div class="mb-3">
    <label class="form-label">場所</label>
    <dd><textarea class="form-control" name="place" rows="5">{{ old('place', $schedule->place) }}</textarea></dd>
    </div>
    <div class="mb-3">
    <label class="form-label">開始日時</label>
    <dd><input class="form-control" type="datetime-local" name="start_time" value="{{ old('start_time', $schedule->start_time) }}"></dd>
    </div>
    <div class="mb-3">
    <label class="form-label">終了日時</label>
    <dd><input class="form-control" type="datetime-local" name="end_time" value="{{ old('end_time', $schedule->end_time) }}"></dd>
    </div>
</div>