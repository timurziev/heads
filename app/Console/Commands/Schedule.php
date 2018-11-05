<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\City;

class Schedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:schedule';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $cities = City::all();

        foreach ($cities as $city) {
            $url = file_get_contents('https://api.openweathermap.org/data/2.5/weather?q=' .$city->name. '&appid=' . \Config::get('api.open_weather_map_id'));
            $data = collect(json_decode($url, true));
            $city->update(['current_temp' => $data['main']['temp']]);
        }
    }
}
