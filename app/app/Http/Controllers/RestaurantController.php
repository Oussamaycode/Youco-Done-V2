<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Restaurant;
use App\Models\typeCuisine;



class RestaurantController extends Controller
{
   
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurant.index', compact('restaurants'));
    }


    public function create()
    {   
        $typecuisines= Typecuisine :: all();
        return view('restaurant.create', compact('typecuisines'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'typecuisine' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
        ]);

        $localisation=$data['city'].' '.$data['street_address'].''.$data['zip_code'];

        $data['statut'] = true;

        Restaurant::create(['nom'=>$data['nom'],
        'localisation'=>$localisation,
        'capacite'=>$data['capacite'],
        'typecuisine'=>$data['typecuisine'],
        'statut'=>true,
        'user_id'=>auth()->user()->id,
        ]);

        return redirect()->route('menu.create');
    
    }

    
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

  
    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'localisation' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
            'statut' => 'required|boolean',
        ]);

        $restaurant->update($data);

        return redirect()->route('restaurants.index')
                         ->with('success', 'Restaurant modifié avec succès');
    }

    // Supprimer = DELETE
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return redirect()->route('restaurants.index')
                         ->with('success', 'Restaurant supprimé avec succès');
    }
}
