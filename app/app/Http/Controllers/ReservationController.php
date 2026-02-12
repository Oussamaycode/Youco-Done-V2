<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\horaire;
use App\Models\crenau;
use Illuminate\Supporrt\Facades\DB;

class ReservationController extends Controller
{
    public function index (){
    
    $horaires=Horaire::all();
    $hours=Crenau::all();
    return view ('reservation.reservation',compact('horaires','hours'));
    }

   public function create(Request $request)
{
    // 1. Get all unique days for the first dropdown
    $horaires= Horaire::select('jour')->distinct()->get();

    // 2. Check if the user has already picked a day
    $selectedDay = $request->query('day');
    $hours = [];

    if ($selectedDay) {
        // 3. Fetch the hours available for that specific day
        $hours = Horaire::where('jour', $selectedDay)->get();
    }

    return view('reservation.reservation', compact('horaires', 'hours', 'selectedDay'));
}

}
