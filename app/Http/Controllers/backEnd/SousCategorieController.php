<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    public function index () {
        $sousCategories = SousCategorie::all();
        $Categories = Categorie::all();
        return view('back-end.pages.sousCategorie.sousCategorie' , compact('sousCategories' , 'Categories'));
    }

    public function show ($id) {
      $sousCategorie = SousCategorie::findOrFail($id);
      $Categories = Categorie::all();
      return view('back-end.pages.sousCategorie.sous-categorie-show' , compact('sousCategorie' , 'Categories'));
    }

    public function create (Request $request) {
        SousCategorie::create([
            'libelle' => $request->libelle ,
            'categorie_id' => $request->categorie ,
        ]);
        return redirect()->route('admin.sousCategorie.index')->with('success' , "Sous Categorie Ajouter");
    }

    public function update ($id , Request $request) {
        $SousCategorie = SousCategorie::findOrFail($id);
        $SousCategorie->libelle = $request->libelle ;
        $SousCategorie->categorie_id = $request->categorie ;
        $SousCategorie->save();
        return redirect()->route('admin.sousCategorie.index')->with('success' , "Sous Categorie modifier");
    }

    public function getSousCategories($categorieId)
    {
        // dd($categorieId);
        $sousCategories = SousCategorie::where('categorie_id', $categorieId)->get();
        return response()->json($sousCategories);
    }

    public function delete ($id) {
        $SousCategorie = SousCategorie::findOrFail($id);
        $SousCategorie->delete();
        return redirect()->back()->with('success' , "Sous Categorie Supprimer") ;
    }
}
