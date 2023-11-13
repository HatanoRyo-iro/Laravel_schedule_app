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
            'end_time' => 'required|date',
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
        //
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
        //
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
