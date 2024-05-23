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
            
           /*  $train = Train::where('departure_time', '>=', now())->get(); */
            $trains = Train::where('on_time', '=', 1)->limit(20)->orderBy('departure_time', 'asc')->get();
            return view('home', compact('trains'));
    }
}
