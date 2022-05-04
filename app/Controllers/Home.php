<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }
    public function index_admin()
    {
        return view('admin/index');
    }

    public function utama()
	{
		return view('login');
	}

    public function apiWeather(){
        $api_key='bdbd1343ad91bd7f179dd2b0b23ce20f';
        $city='London';
        $api_url= 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key;
        $weather_data = file_get_contents($api_url);
        return view('admin/api_weather');
    }
}
