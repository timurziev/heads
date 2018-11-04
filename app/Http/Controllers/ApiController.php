<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class ApiController extends Controller
{
    public function index()
    {
//        $url = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=Nazran&appid=' . \Config::get('api.open_weather_map_id'));
//        $data = collect(json_decode($url, true));

        return view('schedule');
        dd($data);
    }

    public function makeSchedule(Request $request)
    {
        $time_schedule = Cache::forever('time_schedule', $request['time']);
        dd(Cache::get('time_schedule'));
    }
}
