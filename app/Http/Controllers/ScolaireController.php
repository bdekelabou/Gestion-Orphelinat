<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scolaire;
use App\Models\Enfant;

class ScolaireController extends Controller
{
    public function index()
    {
        $scolaire = Scolaire::all();
        return view('scolaire.index', compact('scolaire'));
    }

    public function create()
    {
        $classes = config('scolaire.classes');
        $niveaux = config('scolaire.niveau');
        $enfantsList = Enfant::all();
        return view('scolaire.create', compact('classes', 'niveaux', 'enfantsList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'enfant_id' => 'required',
            'niveau' => 'required',
            'etablissement' => 'required',
            'classe_arrivee' => 'required',
            'classe_actuelle' => 'required',
            'redoublement' => 'required|boolean',
        ]);

        Scolaire::create($request->all());

        return redirect()->route('scolaire.index')
            ->with('success', 'Situation scolaire ajoutée avec succès.');
    }

    public function edit(Scolaire $scolaire)
    {
        return view('scolaire.edit', compact('scolaire'));
    }

    public function update(Request $request, Scolaire $scolaire)
    {
        $request->validate([
            'enfant_id' => 'required',
            'niveau' => 'required',
            'etablissement' => 'required',
            'classe_arrivee' => 'required',
            'classe_actuelle' => 'required',
            'redoublement' => 'required',
        ]);

        $scolaire->update($request->all());

        return redirect()->route('scolaire.index')
            ->with('success', 'Situation scolaire modifiée avec succès.');
    }

    public function destroy(Scolaire $scolaire)
    {
        $scolaire->delete();

        return redirect()->route('scolaire.index')
            ->with('success', 'Situation scolaire supprimée avec succès.');
    }
}
