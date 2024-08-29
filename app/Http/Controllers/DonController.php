<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Don;
use App\Models\Projet;

class DonController extends Controller
{
    public function liste_don()
    {
        $dons = Don::whereNull('projet')->orderBy('id') ->paginate(4);
        return view('don.liste', compact('dons'));
    }
    public function liste_don_visiteur()
    {
        $dons = Don::whereNotNull('projet')->orderBy('id')->paginate(4);
        return view('don.listeVisiteur', compact('dons'));
    }

    public function liste_don_projet()
    {
        $dons = Don::whereNotNull('projet')->orderBy('id')->paginate(4);
        return view('don.listeDonProjet', compact('dons'));
    }
    
    public function donViteur($projet_id){
        $projet = Projet::find($projet_id);
        return view('don.donVisiteur', compact('projet'));
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
            'projet' => 'nullable|string',
        ]);
        $don = new Don();
        $don->nom = $request->nom;
        $don->prenom = $request->prenom;
        $don->nature = $request->nature;
        $don->espece = $request->espece;
        $don->projet = $request->projet;
        $don->save(); 

        return redirect('/ajouter')->with('status','Le don a bien été ajouté');
    }


    public function ajouter_don_traitement_visiteurs(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'nature' => 'nullable|string',
            'espece' => 'nullable|string',
            'projet' => 'nullable|string',
            'paymentMethod' => 'nullable|string',
            'paypalEmail' => 'nullable|email',
            'tmoneyNumber' => 'nullable|string',
            'tmoneyCode' => 'nullable|string',
        ]);
        $don = new Don();
        $don->nom = $request->nom;
        $don->prenom = $request->prenom;
        $don->nature = $request->nature;
        $don->espece = $request->amount;
        $don->projet = $request->projet;
        $don->save();

        return redirect('/')->with('status','Le don a bien été ajouté');
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