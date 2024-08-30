<?php

namespace App\Http\Controllers;

use App\Models\Enfant;
use Illuminate\Http\Request;
use App\Models\User;

class EnfantController extends Controller
{
    // /
    //  * Affiche la liste des enfants.
    //  */
    public function index()
    {
        $enfants = Enfant::all();
        return view('enfants.index', compact('enfants') );
    }

    // /
    //  * Affiche le formulaire de création d'un enfant.
    //  */
    public function create()
    {
        return view('enfants.create');
    }

    // /
    //  * Enregistre un nouvel enfant.
    //  */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required|string',
            'prenom' => 'required|string',
            'genre' => ['required', 'in:homme,femme,autre'],
            'date_naissance' => 'required|date',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
        ]);

        Enfant::create([
            'user_id' =>$user->id,
            'date_naissance' =>$request->date_naissance,
            'situationMedicale' =>$request->situationMedicale,
            'situationScolaire' =>$request->situationScolaire,
        ]);

        return redirect()->route('enfants.index')->with('success', 'Enfant ajouté avec succès');
    }

    // /
    //  * Affiche les bilans médicaux d'un enfant.
    //  */
    public function show($id)
    {
        $enfant = Enfant::with('bilansMedicaux')->findOrFail($id);

        return view('enfants.show', compact('enfant'));
    }

    // /
    //  * Affiche les bilans scolaires d'un enfant.
    //  */

    public function scolaire($id)
    {
        $enfant = Enfant::with('bilansScolaires')->findOrFail($id);
    
        return view('enfants.scolaire', compact('enfant'));
    }

    // /
    //  * Affiche le formulaire d'édition d'un enfant.
    //  */
    public function edit(Enfant $enfant)
    {
        return view('enfants.edit', compact('enfant'));
    }

    // /
    //  * Met à jour les informations d'un enfant.
    //  */
    public function update(Request $request, Enfant $enfant)
    {
        $request->validate([
            'nom'=> 'required|string',
            'prenom' => 'required|string',
            'genre' => ['required', 'in:homme,femme,autre'],
            'date_naissance' => 'required|date',
            'situationMedicale' => 'required|string|in:En bonne santé,Souffrant,Dépressif',
            'situationScolaire' => 'required|string|in:Scolarisé,Non scolarisé',
        ]);

        $enfant->user->update([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'genre' => $request['genre'],
            // autres champs nécessaires pour l'utilisateur
        ]);

        $enfant->update([
            'date_naissance' => $request['date_naissance'],
            'situationMedicale' => $request['situationMedicale'],
            'situationScolaire' => $request['situationScolaire'],
        ]);

        return redirect()->route('enfants.index')->with('success', 'Enfant mis à jour avec succès');
    }

    // /
    //  * Supprime un enfant.
    //  */
    public function destroy(Enfant $enfant)
    {
        $enfant->delete();
        return redirect()->route('enfants.index')->with('success', 'Enfant supprimé avec succès');
    }
}