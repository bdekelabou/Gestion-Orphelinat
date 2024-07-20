<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
     // Affiche la liste des événements
     public function index()
     {
         $evenements = Evenement::all();
         return view('evenement.index', compact('evenements'));
     }
 
     // Affiche le formulaire de création d'un nouvel événement
     public function create()
     {
         return view('evenement.create');
     }
 
     // Enregistre un nouvel événement
     public function ajouter_evenement()
     {
         return view('evenement.create');
     }
 
     public function ajouter_evenement_traitement(Request $request)
     {
         $request->validate([
             'titre' => 'required',
             'description' => 'required',
             'date' => 'required|date',
         ]);
         $evenement = new Evenement();
         $evenement->titre = $request->titre;
         $evenement->description = $request->description;
         $evenement->date = $request->date;
         $evenement->save(); 
 
         return redirect('/evenements/liste')->with('status','L\'evenement a bien été ajouté');
     }
     // Affiche un événement spécifique
     public function show(Evenement $evenement)
     {
         return view('evenement.show', compact('evenement'));
     }
 
     // Affiche le formulaire de modification d'un événement existant
     public function edit(Evenement $evenement)
     {
         return view('evenement.edit', compact('evenement'));
     }
 
     // Met à jour un événement existant
     public function update_evenement($id){
        $evenements = Evenement::find($id);

        return view('evenement.edit', compact('evenements')); 
    }


     public function update_evenement_traitement(Request $request, Evenement $evenement)
     {
         $request->validate([
             'titre' => 'required',
             'date' => 'required|date',
             'description' => 'required',
         ]);
 
         $evenement->update($request->all());
 
         return redirect()->route('evenements.index')
                          ->with('success', 'Evenement updated successfully.');
     }

     public function update_evenement_traitement2(Request $request){
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);
        $evenement = Evenement::find($request->id);
        $evenement->titre = $request->titre;
        $evenement->description = $request->description;
        $evenement->date = $request->date;
        $evenement->update(); 

         
        return redirect('/evenements/liste')->with('status','L\'evenement a bien été modifié'); 
    } 

 
     // Supprime un événement existant
     public function delete_evenement($id){
        $evenement= Evenement::find($id);
        $evenement->delete();
        return redirect('/evenements/liste')->with('status','L\'évenement a bien été supprimé');
    }
}
