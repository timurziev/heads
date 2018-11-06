<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class ScheduleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Cache time when weather will be scheduled
     *
     * @param Request $request
     */
    public function makeSchedule(Request $request)
    {
        Cache::forever('time_schedule', $request['time']);
    }
}
