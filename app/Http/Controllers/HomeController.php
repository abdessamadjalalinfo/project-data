<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars=\App\Models\Car::all();
        $max=\App\Models\Car::max('price');
        $min=\App\Models\Car::min('price');
        $avg=\App\Models\Car::avg('price');
        
        $topmodels=\App\Models\Car::OrderBy('model_id')->GroupBy("model_id")->get("model_id");

        $topman=\App\Models\Car::OrderBy('manufacturer_id')->GroupBy("manufacturer_id")->get("manufacturer_id");

        $toptypes=\App\Models\Car::OrderBy('type_id')->GroupBy("type_id")->get("type_id");
                
        return view('home',['cars'=>$cars,'topmodels'=>$topmodels,'topmanufactuter'=>$topman,'toptypes'=>$toptypes,'max'=>$max,'min'=>$min,'avg'=>$avg]);
    }
}
