<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horaire; 
use App\Models\Crenau;
use App\Models\Reservation; 
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index(Request $request) {
        $horaires = Horaire::all();
        $restaurant_id = $request->query('restaurant_id');
        return view('reservation.reservation', compact('horaires'));
    }

    public function create(Request $request)
    {
        $horaires = Horaire::all(); 
        $selectedHoraireId = $request->input('horaire_id');
        $restaurant_id = $request->input('restaurant_id');
        $timeSlots = [];

        if ($selectedHoraireId) {
            $selectedHoraire = Horaire::find($selectedHoraireId);
            
            if ($selectedHoraire) {
                $start = Carbon::parse($selectedHoraire->heuredebut);
                $end = Carbon::parse($selectedHoraire->heurefin);

                while ($start <= $end) {
                    $timeSlots[] = $start->format('H:i');
                    $start->addHour(); 
                }
            }
        }

        return view('reservation.reservation', compact('horaires', 'timeSlots', 'selectedHoraireId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'horaire_id' => 'required|exists:horaires,id',
            'heure_reservation' => 'required',
            'restaurant_id'=>'required',
        ]);

        $reservation = new Reservation();
        $reservation->horaire_id = $request->horaire_id;
        $reservation->heure_reservation = $request->heure_reservation;
        $reservation->user_id=auth()->user()->id;
        $reservation->restaurant_id = $request->restaurant_id;
        $reservation->save();

        return redirect()->route('reservation.index')
                         ->with('success', 'Your table has been reserved for ' . $request->heure_reservation);
    }
}