<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbonnementRequest;
use App\Models\Abonnement;
use App\Models\Car;
use App\Models\Paiement;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbonnementController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AbonnementRequest $request)
    {
        $request->validated();
        $car = Car::find($request->input('car_id'));
        $reservation = Reservation::where('car_id', $request->input('car_id'))->first();

        $date_retour_reservation = Carbon::createFromFormat('Y-m-d H:i:s', $reservation->date_retour);
        $date_retour = $date_retour_reservation->addDays($request->input('jours'));

        $reservation->date_retour = $date_retour;
        $reservation->save();
        $abonnement = Abonnement::create([
            "user_id" => Auth()->id(),
            "car_id" => $request->input('car_id'),
            "nbre_jour" => $request->input('jours'),
            "prix" => $car->prix_par_jour * $request->input('jours'),
            "date_retour" => $date_retour,
        ]);

        Paiement::create([
            "operation_id" => $abonnement->id,
            "prix" => $abonnement->prix,
            "operation" => "abonnement",
        ]);


        return redirect()->route('reservations');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function abonnement_show_car($id)
    {
        $car = Car::find($id);
        return view("carloc.abonnement_show_car", compact("car"));
    }

    public function abonnement_payform($id)
    {
        $car = Car::find($id);
        return view("carloc.abonnement_payform", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
