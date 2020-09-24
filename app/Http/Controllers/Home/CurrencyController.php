<?php

namespace App\Http\Controllers\Home;

use App\Models\CurrencyRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        //TODO добавить Cron
        //Берем курс на день по городу Минск из "belarusbank.by"
        $json = file_get_contents('https://belarusbank.by/api/kursExchange?city=%D0%9C%D0%B8%D0%BD%D1%81%D0%BA');
        $data = collect(\GuzzleHttp\json_decode($json));
        $rate = $data[0]->USD_out;
        CurrencyRate::create([
            'rate'=>$rate
        ]);
    }
}
