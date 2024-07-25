<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Status;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
     // Affiche la liste des événements
     public function index()
     {
         $evenements = Evenement::with('status')->get();
         return view('evenement.index', compact('evenements'));
     }
     
 
     // Affiche le formulaire de création d'un nouvel événement
     public function create()
     {
        $statuses = Status::all();
         return view('evenement.create', compact('statuses'));
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
             'status_id' => 'required|exists:status,id',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         $path = null;
         if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
         }

         $evenement = new Evenement();
         $evenement->titre = $request->titre;
         $evenement->description = $request->description;
         $evenement->image = $path;
         $evenement->date = $request->date;
         $evenement->status_id = $request->status_id;
         $evenement->save(); 
 
         return redirect('/evenements/liste')->with('status','L\'evenement a bien été ajouté');
     }
     // Affiche un événement spécifique
     public function show(Evenement $evenement)
     {
         return view('evenement.show', compact('evenement'));
     }
     public function show_evenement()
     {
        $events = Evenement::all();
        return view('evenement.publication', compact('events'));
     }
 
     // Affiche le formulaire de modification d'un événement existant
     public function edit(Evenement $evenement)
     {
        $statuses = Status::all();
         return view('evenement.edit', compact('evenement', 'statuses'));
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
             'status_id' => 'required|exists:status,id',
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
