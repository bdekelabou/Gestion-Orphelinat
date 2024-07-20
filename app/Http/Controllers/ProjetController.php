<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
    
// Affiche la liste des enfants.
        $projets = Projets::all();
        return view('projets.index', compact('projets'));
    }

// Affiche le formulaire de création d'un enfant.
    public function create()
    {
        return view('projets.create');
    }
   
// Enregistre un nouvel projet.
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required|string',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'budget' => 'required|numeric',
            'statut' => 'required|boolean',
        ]);

        Projets::create([
            'nom' =>$request->nom,
            'description' =>$request->description,
            'date_debut' =>$request->date_debut,
            'budget' =>$request->budget,
            'statut' =>$request->statut,
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet ajouté avec succès');
    }
// Affiche les détails d'un enfant spécifique.
    public function show(Projets $projet)
    {
        return view('projets.show', compact('projet'));
    }

// Affiche le formulaire d'édition d'un enfant.
    public function edit(Projets $projet)
    {
        return view('projets.editer', compact('projet'));
    }

// Met à jour les informations d'un enfant.
    public function update(Request $request, Projets $projet)
    {
        $request->validate([
            'nom'=> 'required|string',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'budget' => 'required|numeric',
            'statut' => 'required|boolean',
        ]);

        $projet->update([
            'nom' =>$request->nom,
            'description' =>$request->description,
            'date_debut' =>$request->date_debut,
            'budget' =>$request->budget,
            'statut' =>$request->statut,
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet modifié avec succès');
    }
//supprime un projet
    public function destroy(Projets $projet)
    {
        $projet->delete();
        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès');
    }

}


