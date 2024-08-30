<?php

namespace App\Http\Controllers;

use id;
use App\Models\Enfant;
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
        $vaccinsList = config('medical.list');  //appel de la liste des vaccins depuis le fichier de configuration

        $antecedentMedicauxList = config('medical.antecedents');  //appel de la liste des antecedents medicaux depuis le fichier de configuration

        $appareilsMedicauxList = config('medical.appareils');  //appel de la liste des appareils medicaux depuis le fichier de configuration

        $soinsSpeciauxList = config('medical.soins');  //appel de la liste des soins speciaux depuis le fichier de configuration

        $groupesSanguinsList = config('medical.groupes');  //appel de la liste des groupes sanguins depuis le fichier de configuration

        $enfantsList= Enfant::all(); //recuperation de la liste des enfants

        return view('medical.creation', compact('vaccinsList','antecedentMedicauxList','appareilsMedicauxList','soinsSpeciauxList','enfantsList','groupesSanguinsList'));
    }

    //enregistre un nouveau bilan medical
    public function store(Request $request)
    {
        $request->validate([
            'enfant_id' => 'required|exists:enfants,id',
            'antecedent_medicaux' => 'nullable|array',
            'vaccin' => 'nullable|array',
            'appareil_medicaux' => 'nullable|array',
            'soin_speciaux' => 'nullable|array',
            'groupe_sanguin' => 'required|string|max:3',
            'poids' => 'required|numeric',
            'taille' => 'required|numeric',
        ]);
        
        Medical::create([
            'enfant_id' => $request->input('enfant_id'),
            'antecedent_medicaux' => $request->input('antecedent_medicaux', []),
            'vaccin' => $request->input('vaccin', []),
            'appareil_medicaux' => $request->input('appareil_medicaux', []),
            'soin_speciaux' => $request->input('soin_speciaux', []),
            'groupe_sanguin' => $request->input('groupe_sanguin'),
            'poids' => $request->input('poids'),
            'taille' => $request->input('taille'),
        ]);

        return redirect()->route('medical.host')->with('success', 'Bilan medical effectué avec succès');
    }

    //affiche les details d'un bilan medical specifique
    public function show(Medical $medical, $id)
    {
        // $enfant = Enfant::findOrFail($id);
        // $medical = $enfant->medical; //
        return view('medical.show', compact('medical'));
    }

    //affiche le formulaire d'edition d'un bilan medical
    public function edit(Medical $medical)
    {
        $vaccinsList = config('medical.list'); //appel de la liste des vaccins depuis le fichier de configuration

        $antecedentMedicauxList = config('medical.antecedents'); //appel de la liste des antecedents medicaux depuis le fichier de configuration

        $appareilsMedicauxList = config('medical.appareils'); //appel de la liste des appareils medicaux depuis le fichier de configuration

        $soinsSpeciauxList = config('medical.soins'); //appel de la liste des soins speciaux depuis le fichier de configuration

        $enfantsList= Enfant::all(); //recuperation de la liste des enfants

        return view('medical.editer', compact('medical', 'vaccinsList','antecedentMedicauxList','appareilsMedicauxList','soinsSpeciauxList'));
    }

    //mettre a jour les informations d'un bilan medical
    public function update(Request $request, Medical $medical)
    {
        $request->validate([
            'enfant_id' => 'required',
            'antecedent_medicaux' => 'array',
            'vaccin' => 'array',
            'appareil_medicaux' => 'array',
            'soin_speciaux' => 'array',
            'groupe_sanguin' => 'required|string',
            'poids' => 'required|integer',
            'taille' => 'required|integer',
        ]);
        

       $medical->update([
            'enfant_id' => $request->enfant_id,
            'vaccin' => json_encode($request->input('vaccin')),
            'antecedent_medicaux' => json_encode($request->input('antecedent_medicaux')),
            'appareil_medicaux' => json_encode($request->input('appareil_medicaux')),
            'soin_speciaux' => json_encode($request->input('soin_speciaux')),
            'groupe_sanguin' => $request->groupe_sanguin,
            'poids' => $request->poids,
            'taille' => $request->taille,
        ]);

        return redirect()->route('medical.index')->with('success', 'Bilan medical modifié avec succès');
    }

    //supprime un bilan medical
    public function destroy(Medical $medical)
    {
        $medical->delete();
        return redirect()->route('medical.host')->with('success', 'Bilan medical supprimé avec succès');
    }

}
