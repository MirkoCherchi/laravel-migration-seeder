<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $todayTrains = Train::whereDate('departure_time', Carbon::today())->where('cancelled', 0)->get();

        return view("welcome", compact("trains", "todayTrains"));
    }
}
