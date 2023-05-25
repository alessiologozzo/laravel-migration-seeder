<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index(){
        $myTime = Carbon::now();
        $myTime->setTimezone("Europe/Rome");
        $trains = Train::where("orario_partenza", ">", "$myTime")->orderBy("orario_partenza", "asc")->get();
        $rows_number = Train::where("orario_partenza", ">", "$myTime")->get()->count();
        $total_number = Train::count();
        return view("home", ["trains" => $trains, "rows_number" => $rows_number, "total_number" => $total_number]);
    }
}
