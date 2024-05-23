<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class HomeController extends Controller
{
    public function index()
    {
        $trains = Train::all();
            //dd($trains);
            $trains = Train::orderBy('departure_time', 'asc')->get();
            $train = Train::where('departure_time', '>=', now())->get();
            $train = Train::select('on_time')->where('on_time', '=', 1)->limit(20)->get();
            return view('home', compact('trains'));
    }
}
