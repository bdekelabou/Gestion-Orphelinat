<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    //affiche la des bilan medical
    public function index()
    {
        $medical = Medical::all();
        return view('medical.host', compact('medical'));
    }

    //affiche le formulaire de creation d'un bilan medical
    public function create()
    {
        return view('medical.creation');
    }

    //enregistre un nouveau bilan medical
    public function store(Request $request)
    {
        $request->validate([
            'antécédents_familiaux' => 'required|string',
            'vaccinations' => 'required|string',
            'maladies_antérieures' => 'required|string',
            'examen_physique' => 'required|string',
            'etat_mental' => 'required|string',
            'autres_examens' => 'required|string',
            'appareils_medicaux' => 'required|string',
            'soins_speciaux' => 'required|string',
        ]);

        Medical::create([
            'antécédents_familiaux' => $request->antécédents_familiaux,
            'vaccinations' => $request->vaccinations,
            'maladies_antérieures' => $request->maladies_antérieures,
            'examen_physique' => $request->examen_physique,
            'etat_mental' => $request->etat_mental,
            'autres_examens' => $request->autres_examens,
            'appareils_medicaux' => $request->appareils_medicaux,
            'soins_speciaux' => $request->soins_speciaux,
        ]);

        return redirect()->route('medical.host')->with('success', 'Bilan medical ajouté avec succès');
    }

    //affiche les details d'un bilan medical specifique
    public function show(Medical $medical)
    {
        return view('medical.show', compact('medical'));
    }

    //affiche le formulaire d'edition d'un bilan medical
    public function edit(Medical $medical)
    {
        return view('medical.editer', compact('medical'));
    }

    //mettre a jour les informations d'un bilan medical
    public function update(Request $request, Medical $medical)
    {
        $request->validate([
            'antécédents_familiaux' => 'required|string',
            'vaccinations' => 'required|string',
            'maladies_antérieures' => 'required|string',
            'examen_physique' => 'required|string',
            'etat_mental' => 'required|string',
            'autres_examens' => 'required|string',
            'appareils_medicaux' => 'required|string',
            'soins_speciaux' => 'required|string',
        ]);

        $medical->update([
            'antécédents_familiaux' => $request->antécédents_familiaux,
            'vaccinations' => $request->vaccinations,
            'maladies_antérieures' => $request->maladies_antérieures,
            'examen_physique' => $request->examen_physique,
            'etat_mental' => $request->etat_mental,
            'autres_examens' => $request->autres_examens,
            'appareils_medicaux' => $request->appareils_medicaux,
            'soins_speciaux' => $request->soins_speciaux,
        ]);

        return redirect()->route('medical.index')->with('success', 'Bilan medical modifié avec succès');
    }

    //supprime un bilan medical
    public function destroy(Medical $medical)
    {
        $medical->delete();
        return redirect()->route('medical.index')->with('success', 'Bilan medical supprimé avec succès');
    }

}
