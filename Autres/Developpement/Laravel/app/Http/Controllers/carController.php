<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class carController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy("create_at", "desc")->paginate(9);
        return view("carloc.acceuil", compact("cars"));
    }
    public function cars()
    {
        $cars = Car::orderBy("create_at", "desc")->paginate(21);
        return view("carloc.cars", compact("cars"));
    }
    public function show_car($id)
    {
        $car = Car::find($id);
        return view("carloc.show_car", compact("car"));
    }
    public function about()
    {
        return view("carloc.about");
    }
    public function contact()
    {
        return view("carloc.contact");
    }
}
