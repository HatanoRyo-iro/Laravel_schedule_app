<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $schedules = \Auth::user()->schedules()->orderByDesc('created_at')->get();
        $data = [
            'schedules' => $schedules,
        ];
        return view('home');
    }
}
