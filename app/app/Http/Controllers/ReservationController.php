<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horaire; // Tip: Model names are usually Capitalized
use App\Models\Crenau;
use App\Models\Reservation; // <--- Don't forget this!
use Illuminate\Support\Facades\DB; // <--- Fixed the triple 'r'
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index() {
        $horaires = Horaire::all();
        // Since step 1 is index, we probably don't have hours yet
        return view('reservation.reservation', compact('horaires'));
    }

    public function create(Request $request)
    {
        $horaires = Horaire::all(); 
        $selectedHoraireId = $request->input('horaire_id');
        $timeSlots = [];

        if ($selectedHoraireId) {
            $selectedHoraire = Horaire::find($selectedHoraireId);
            
            if ($selectedHoraire) {
                $start = Carbon::parse($selectedHoraire->heuredebut);
                $end = Carbon::parse($selectedHoraire->heurefin);

                // Generate hours
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
        ]);

        $reservation = new Reservation();
        $reservation->horaire_id = $request->horaire_id;
        $reservation->heure_reservation = $request->heure_reservation;
        $reservation->save();

        return redirect()->route('reservation.index')
                         ->with('success', 'Your table has been reserved for ' . $request->heure_reservation);
    }
}