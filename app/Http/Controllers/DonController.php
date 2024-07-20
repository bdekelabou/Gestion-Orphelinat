<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Don;

class DonController extends Controller
{
    public function liste_don()
    {
        $dons = Don::orderBy('id')->paginate(4);
        return view('don.liste', compact('dons'));
    }

    public function ajouter_don()
    {
        return view('don.ajouter');
    }

    public function ajouter_don_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'nature' => 'required',
            'espece' => 'required',
        ]);
        $don = new Don();
        $don->nom = $request->nom;
        $don->prenom = $request->prenom;
        $don->nature = $request->nature;
        $don->espece = $request->espece;
        $don->save(); 

        return redirect('/ajouter')->with('status','Le don a bien été ajouté');
    }

    public function update_don($id){
        $dons = Don::find($id);

        return view('don.update', compact('dons')); 
    }

    public function update_don_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'nature' => 'required',
            'espece' => 'required',
        ]);
        $don = Don::find($request->id);
        $don->nom = $request->nom;
        $don->prenom = $request->prenom;
        $don->nature = $request->nature;
        $don->espece = $request->espece;
        $don->update();
         
        return redirect('/don')->with('status','Le don a bien été modifié'); 
    } 

    public function delete_don($id){
        $don= Don::find($id);
        $don->delete();
        return redirect('/don')->with('status','Le don a bien été supprimé');
    }
}
