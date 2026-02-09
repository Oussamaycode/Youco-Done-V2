<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Menu;
use App\Models\TypeCuisine;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function index()
    {
        $plats = Plat::with(['menu', 'typeCuisine'])->get();
        return response()->json($plats);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
        ]);

        $restaurant = Restaurant::where('user_id', auth()->id())
            ->latest()
            ->firstOrFail();

        $menu = Menu::where('restaurant_id', $restaurant->id)
            ->latest()
            ->firstOrFail();

        Plat::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'menu_id' => $menu->id,
            'typecuisine_id' => $restaurant->typecuisine,
        ]);

        return back()->with('success', 'Plat added');
    }

    public function show($id)
    {
        $plat = Plat::with(['menu', 'typeCuisine'])->findOrFail($id);
        return response()->json($plat);
    }

    public function update(Request $request, $id)
    {
        $plat = Plat::findOrFail($id);
        $plat->update($request->only('nom', 'prix', 'menu_id', 'type_cuisine_id'));
        return response()->json($plat);
    }

    public function destroy($id)
    {
        $plat = Plat::findOrFail($id);
        $plat->delete();
        return response()->json(null, 204);
    }
}
