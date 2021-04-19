<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index () {
        $allIngredients = Ingredient::all();
        return view('home', compact('allIngredients'));
    }
    public function create () {
        return view('admin.createIngred');
    }
    public function store (Request $request) {
        $ingredient = new Ingredient();
        $ingredient->nom = $request->nom;
        $ingredient->quantite = $request->quantite;
        $ingredient->image = $request->image;
        $ingredient->save();
        return redirect()->route('home');
    }
    public function destroy (Ingredient $id) {
        $id->delete();
        return redirect()->route('home');
    }
    public function show (Ingredient $id) {
        $details = $id;
        return view('admin/showIngred', compact('details'));
    }
}
