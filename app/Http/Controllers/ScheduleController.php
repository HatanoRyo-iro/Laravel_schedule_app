<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //　Scheduleモデルの全件取得
        $schedules = Schedule::all();
        $data = ['schedules' => $schedules];
        return view('schedules.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Scheduleのインスタンスを作成
        $schedule = new Schedule();
        $data = ['schedule' => $schedule];
        return view('schedules.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // データベースに登録
        $this->validate($request, [
            'content' => 'required',
            'place' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ],[
            'content.required' => '予定は必ず入力してください',
            'place.required' => '場所は必ず入力してください',
            'start_time.required' => '開始時間は必ず入力してください',
            'end_time.required' => '終了時間は必ず入力してください',
            'end_time.after' => '終了時間は開始時間より後の時刻を選択してください',
        ]);
        $schedule = new Schedule();
        $schedule->content = $request->content;
        $schedule->place = $request->place;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->save();

        return redirect(route('schedules.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        // 編集
        $data = ['schedule' => $schedule];
        return view('schedules.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        // 更新
        $this->validate($request, [
            'content' => 'required',
            'place' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ],[
            'content.required' => '予定は必ず入力してください',
            'place.required' => '場所は必ず入力してください',
            'start_time.required' => '開始時間は必ず入力してください',
            'end_time.required' => '終了時間は必ず入力してください',
            'end_time.after' => '終了時間は開始時間より後の時刻を選択してください',
        ]);
        $schedule->content = $request->content;
        $schedule->place = $request->place;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->save();

        return redirect(route('schedules.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
