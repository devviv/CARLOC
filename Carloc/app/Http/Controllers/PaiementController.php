<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaiementRequest;
use App\Models\Paiement;
use App\Http\Requests\StorePaiementRequest;
use App\Http\Requests\UpdatePaiementRequest;
use App\Models\Car;
use App\Models\Reservation;
use Carbon\Carbon;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaiementRequest $request)
    {
        $request->validated();
        $date_debut = Carbon::createFromFormat('Y-m-d', $request->input('date_debut'));
        $date_retour = $date_debut->addDays($request->input('jours'));
        $car = Car::find($request->input('car_id'));

        $reservation = Reservation::create([
            "user_id" => Auth()->id(),
            "car_id" => $request->input('car_id'),
            "nbre_jour" => $request->input('jours'),
            "prix" => $car->prix_par_jour * $request->input('jours'),
            "etat" => "paye",
            "date_retour" => $date_retour,
        ]);

        Paiement::create([
            "operation_id" => $reservation->id,
            "prix" => $reservation->prix,
            "operation" => "reservation",
        ]);

        $car->quantite = $car->quantite - 1;
        if ($car->quantite == 0) {
            $car->disponible = false;
        }
        $car->save();


        return redirect()->route('reservations');
    }
    /**
     * Display the specified resource.
     */
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaiementRequest $request, Paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paiement $paiement)
    {
        //
    }
}
