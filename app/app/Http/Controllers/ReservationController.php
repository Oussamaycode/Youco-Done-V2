<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\horaire;

class ReservationController extends Controller
{
    public function index (){
    
    $horaires=Horaire::all();
    return view ('reservation.reservation',compact('horaires'));
    }

}
