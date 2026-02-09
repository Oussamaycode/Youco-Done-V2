<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Restaurant;
use App\Models\typeCuisine;


class MenuController extends Controller
{


    public function create()

    {
         return view('menu.create');
    }

    public function store(Request $request)
    {
            $user_id=auth()->user()->id;
            $restaurant=Restaurant::where('user_id',$user_id)->orderBy('id','desc')->first();//akhir restaurant tzad how li kancreew lih l menu daba

            $data = $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        Menu::create(['nom'=>$data['nom'],
        'restaurant_id'=>$restaurant->id,
        ]);

        return redirect()->route('menu.create');

    }

    public function show($id)
    {
        $menu = Menu::with('plats')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->only('nom'));
      
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

    }
}
