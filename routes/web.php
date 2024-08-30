<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\VisitorController;

use App\Http\Controllers\ScolaireController;




Route::get('/', [ProjetController::class, 'welcome'])->name('welcome');





// Route::get('don/visiteur', function () {
//     return view('don.donVisiteur');
// });

Route::get('/apropos', function () {
    return view('visiteurs.apropos');
});



route::get('/nosprojets', [ProjetController::class, 'nosprojets'])->name('nosprojets');



Route::get('/Equipe',function() {
    return view('visiteurs.Equipe');
});

Route::get('/gallery',function() {
    return view('visiteurs.gallery');
});

Route::get('/contact',function() {
    return view('visiteurs.contact');
});


Route::get('/dashboard', [VisitorController::class, 'showVisitor'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/evenements', [EvenementController::class, 'ajouter_evenement'])->name('evenements.create');
    Route::get('/evenements/liste', [EvenementController::class, 'index'])->name('evenements.liste');
    Route::get('/update-evenement/{id}',[EvenementController::class, 'update_evenement'])->name('evenements.update');
    Route::get('/evenements/delete/{id}', [EvenementController::class, 'delete_evenement'])->name('evenements.delete');
    Route::post('/update-evenement/traitement',[EvenementController::class, 'update_evenement_traitement2'])->name('evenements.update_traitement');
    Route::post('/ajouter/traitement',[EvenementController::class, 'ajouter_evenement_traitement'])->name('evenements.evenement_traitement');


    Route::post('/ajouter/traitement/evenement',[EvenementController::class, 'ajouter_evenement_traitement'])->name('ajouter.evenement_traitement');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');   
    Route::get('/delete-don/{id}',[DonController::class, 'delete_don'])->name('don.delete');
    Route::get('/update-don/{id}',[DonController::class, 'update_don'])->name('don.update');
    Route::post('/update/traitement',[DonController::class, 'update_don_traitement'])->name('update_don.traitement');
    
    Route::get('/don',[DonController::class, 'liste_don'])->name('don.liste');
    Route::get('/don/projet',[DonController::class, 'liste_don_projet'])->name('liste.don.projet');
    Route::get('/don/visiteur/{projet_id}',[DonController::class, 'donViteur'])->name('don.visiteur'); // fdfdfd
    Route::get('/ajouter',[DonController::class, 'ajouter_don'])->name('don.ajout');
    Route::post('/ajouter/traitement',[DonController::class, 'ajouter_don_traitement'])->name('ajouter_don.taitement');
    Route::get('/evenements/{id}/publier', [EvenementController::class, 'publier'])->name('evenements.publier');
    Route::get('/evenements/{id}/depublier', [EvenementController::class, 'depublier'])->name('evenements.depublier');
});

Route::get('/publication', [EvenementController::class, 'showPublie'])->name('evenements.publie');
//Route::get('/publication', [EvenementController::class, 'show_evenement'])->name('publication');
Route::post('/ajouter/traitement/visiteur',[DonController::class, 'ajouter_don_traitement_visiteurs'])->name('ajouter_don.traitement.visiteur');




Route::get('logout', function(){
    auth()-> logout();

    return to_route('login');
});

//  Route::resource('enfants', EnfantController::class);

//Route pour enfant
Route::resource('enfants', EnfantController::class)->names([
    'index' => 'enfants.index',
    'create' => 'enfants.create',
    'store' => 'enfants.store',
    'show' => 'enfants.show',
    'edit' => 'enfants.edit', 
    'update' => 'enfants.update',
    'destroy' => 'enfants.destroy',
]);

Route::get('enfants/{enfant}/scolaire', [EnfantController::class, 'scolaire'])->name('enfants.scolaire');

Route::resource('medical', MedicalController::class)->names([
    'index' => 'medical.host',
    'create' => 'medical.creation',
    'store' => 'medical.store',
    'show' => 'medical.show',
    'edit' => 'medical.editer', 
    'update' => 'medical.update',
    'destroy' => 'medical.destroy',
]);
// Route::get('/medical/{id}', [MedicalController::class, 'show'])->name('medical.show');
// Route::get('/enfants/{id}/medical', [EnfantController::class, 'showMedical'])->name('enfants.show');

//Route pour projet 

Route::resource('projets', ProjetController::class)->names([
    'index' => 'projets.index',
    'create' => 'projets.create',
    'store' => 'projets.store',
    'show' => 'projets.show',
    'edit' => 'projets.editer', 
    'update' => 'projets.update',
    'destroy' => 'projets.destroy',
]);

Route::resource('scolaire', ScolaireController::class)->names([
    'index' => 'scolaire.index',
    'create' => 'scolaire.create',
    'store' => 'scolaire.store',
    'show' => 'scolaire.show',
    'edit' => 'scolaire.edit', 
    'update' => 'scolaire.update',
    'destroy' => 'scolaire.destroy',
]);

Route::post('/projets/{id}/publish', [ProjetController::class, 'publishItem'])->name('projets.publishItem');



Route::post('/projets/{id}/unpublish', [ProjetController::class, 'unpublishItem'])->name('projets.unpublishItem');
// Route::post('/publish/{id}', [ProjetController::class, 'publishItem'])->name('publishItem');
Route::get('/welcome', [ProjetController::class, 'welcome'])->name('welcome');


require __DIR__.'/auth.php';
