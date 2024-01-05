<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::where('disponible', true)->orWhere('quantite', '>' , 0)->orderBy("create_at", "asc")->paginate(9);
        return view("carloc.acceuil", compact("cars"));
    }
    public function cars()
    {
        $cars = Car::where('disponible', true)->orWhere('quantite', '>', 0)->orderBy("create_at", "asc")->paginate(21);
        return view("carloc.cars", compact("cars"));
    }
    public function show_car($id)
    {
        $car = Car::find($id);
        $cars = Car::where('disponible', true)->orWhere('quantite', '>', 0)->orderBy("create_at", "asc")->take(3)->get();
        return view("carloc.show_car", compact(["car", "cars"]));
    }
    public function search(Request $request)
    {
        $cars = Car::where('nom', 'like', '%' . $request->input('search') . '%')->orWhere('description', 'like', '%' . $request->input('search') . '%')->orWhere('modele', 'like', '%' . $request->input('search') . '%')->paginate(9);

        // return $cars
        return view("carloc.cars", compact('cars'));
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
