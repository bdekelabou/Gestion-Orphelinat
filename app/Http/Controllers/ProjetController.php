<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
           'image' => 'nullable|image|max:4048',
            'detail' => 'nullable|string',
        ]);

        //Gestion de la selection de l'image et la ou la stockee
        $imagePath=null;
            if($request -> hasFile('image')) {

                $imagePath = $request -> file('image') ->store('images','public');
            }

        Projet::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'Budget' => $request->Budget,
            'statut' => $request->statut,
            'detail' => $request->detail,
            'image' => $imagePath,

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048',
            'detail' => 'nullable|string',
        ]);

         //Gestion de la selection de l'image et la ou la stockee
         $imagePath=null;
         if($request -> hasFile('image')) {
            
            if($projet->image){
                //supprimer l'ancienne image si on selectionne une nouvelle image
                Storage::disk('public') ->delete($projet->image);
            }
            
            //stocker la nouvelle image
            $imagePath = $request -> file('image') ->store('images','public');
         }

         else{
            $imagePath =$projet->image;
         }

        $projet->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'Budget' => $request->Budget,
            'statut' => $request->statut,
            'detail' => $request->detail,
            'image' => $imagePath,
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet modifié avec succès');
    }

    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès');
    }

    public function publishItem($id)
    {
        $projet = Projet::findOrFail($id);

        $projet->publier = true;
        $projet->save();

        return redirect()->route('projets.index')->with('success', 'Projet publier avec succes');
    }

    public function welcome()
    {
        $projets = Projet::where('publier', true)->get();
        return view('welcome', compact('projets'));
    }
    
    public function unpublishItem($id)
    {
        $projet = Projet::findOrFail($id);
        // Mettez à jour le statut de l'élément ou effectuez toute autre action nécessaire
        $projet->publier = false;
        $projet->save();

        // Redirigez vers le dashboard avec l'élément non publié
        return redirect()->route('projets.index')->with('success', 'Projet retirer avec succes');
    }

    public function nosprojets()
    {
        $projets = Projet::where('publier', true)->get();
        return view('visiteurs.nosprojets', compact('projets'));
    }


}
