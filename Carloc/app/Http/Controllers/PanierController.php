<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paniers = Panier::where('user_id', Auth::id())->get();
        $cars = array();
        foreach ($paniers as $panier) {
            array_push($cars, Car::where('id', $panier->car_id)->first());
        }

        return view('carloc.panier', compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addPanier($id)
    {
        if (Panier::where('car_id', $id)->where('user_id', Auth::id())) {
            Panier::create([
                "user_id" => Auth::id(),
                "car_id" => $id,
            ]);
        }

        return redirect(route('show_panier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Panier $panier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Panier $panier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $panier = Panier::where('car_id', $id);
        $panier->delete();
        return redirect(route('show_panier'));
    }
}
