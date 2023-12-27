<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy("create_at", "desc")->where('disponible', true)->orwhere('quantite', '>' , 0)->paginate(9);
        return view("carloc.acceuil", compact("cars"));
    }
    public function cars()
    {
        $cars = Car::orderBy("create_at", "desc")->where('disponible', true)->orwhere('quantite', '>', 0)->paginate(21);
        return view("carloc.cars", compact("cars"));
    }
    public function show_car($id)
    {
        $car = Car::find($id);
        $cars = Car::orderBy("create_at", "desc")->where('disponible', true)->orwhere('quantite', '>', 0)->take(3)->get();
        return view("carloc.show_car", compact(["car", "cars"]));
    }
    public function tarifs()
    {
        return view("carloc.tarifs");
    }
    public function about()
    {
        return view("carloc.about");
    }
    public function contact()
    {
        return view("carloc.contact");
    }

    public function payform($id)
    {
        $car = Car::find($id);
        return view("carloc.payform", compact("car"));
    }
}
