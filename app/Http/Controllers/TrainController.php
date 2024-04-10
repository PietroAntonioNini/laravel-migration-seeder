<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TrainController extends Controller
{
    public function index() {

        $today = date('Y-m-d');
        $trains = Train::whereDate('departure_date','=', $today)->get();


        return view("home", compact("trains"));
    }
}
