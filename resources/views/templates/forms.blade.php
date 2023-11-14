@csrf 
<dl class="form-list">
    <dt>内容</dt>
    <dd><textarea name="content" rows="5">{{ old('content', $schedule->content) }}</textarea></dd>
    <dt>場所</dt>
    <dd><textarea name="place" rows="5">{{ old('place', $schedule->place) }}</textarea></dd>
    <dt>開始日時</dt>
    <dd><input type="datetime-local" name="start_time" value="{{ old('start_time', $schedule->start_time) }}"></dd>
    <dt>終了日時</dt>
    <dd><input type="datetime-local" name="end_time" value="{{ old('end_time', $schedule->end_time) }}"></dd>
</dl>