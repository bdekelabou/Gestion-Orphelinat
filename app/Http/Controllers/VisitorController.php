<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Don;
use App\Models\Projet; // Import du modèle Projet

class VisitorController extends Controller
{
    public function showVisitor()
    {
        // Récupérer la somme totale des dons
        $totalDons = Don::sum('espece');

        // Récupérer tous les projets depuis la base de données
        $projets = Projet::all();

        // Passer les données à la vue
        return view('dashboard', compact('totalDons', 'projets'));
    }
}