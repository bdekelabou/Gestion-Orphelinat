<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));
    }

    public function create()
    {
        return view('projets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required|string',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'Budget' => 'required|numeric',
            'statut' => 'required|boolean',
        ]);

        Projet::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'Budget' => $request->Budget,
            'statut' => $request->statut,
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet ajouté avec succès');
    }

    public function show(Projet $projet)
    {
        return view('projets.show', compact('projet'));
    }

    public function edit(Projet $projet)
    {
        return view('projets.editer', compact('projet'));
    }

    public function update(Request $request, Projet $projet)
    {
        $request->validate([
            'nom'=> 'required|string',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'Budget' => 'required|numeric',
            'statut' => 'required|boolean',
        ]);

        $projet->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'Budget' => $request->Budget,
            'statut' => $request->statut,
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet modifié avec succès');
    }

    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès');
    }
}
