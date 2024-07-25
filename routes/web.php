<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicalController;


// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [ProjetController::class, 'welcome'])->name('welcome');


Route::get('/apropos', function () {
    return view('visiteurs.apropos');
});

Route::get('/nosprojets',function() {
    return view('visiteurs.nosprojets');
});

Route::get('/Equipe',function() {
    return view('visiteurs.Equipe');
});

Route::get('/gallery',function() {
    return view('visiteurs.gallery');
});

Route::get('/contact',function() {
    return view('visiteurs.contact');
});

// Route::get('/', function () {
//     return view('auth.register');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/evenements', [EvenementController::class, 'ajouter_evenement'])->name('evenements.create');
    Route::get('/evenements/liste', [EvenementController::class, 'index'])->name('evenements.liste');
    Route::get('/update-evenement/{id}',[EvenementController::class, 'update_evenement'])->name('evenements.update');
    Route::get('/evenements/delete/{id}', [EvenementController::class, 'delete_evenement'])->name('evenements.delete');
    Route::post('/update-evenement/traitement',[EvenementController::class, 'update_evenement_traitement2'])->name('evenements.update_traitement');
    Route::post('/ajouter/traitement',[EvenementController::class, 'ajouter_evenement_traitement'])->name('evenements.evenement_traitement');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    Route::get('/delete-don/{id}',[DonController::class, 'delete_don'])->name('don.delete');
    Route::get('/update-don/{id}',[DonController::class, 'update_don'])->name('don.update');
    Route::post('/update/traitement',[DonController::class, 'update_don_traitement'])->name('update_don.traitement');
    Route::get('/don',[DonController::class, 'liste_don'])->name('don.liste');
    Route::get('/ajouter',[DonController::class, 'ajouter_don'])->name('don.ajout');
    Route::post('/ajouter/traitement',[DonController::class, 'ajouter_don_traitement'])->name('ajouter_don.taitement');
});




Route::get('logout', function(){
    auth()-> logout();

    return to_route('login');
});

 Route::resource('enfants', EnfantController::class);
//  Route::resource('projets', ProjetController::class);
//  Route::resource('evenement', EvenementController::class);
//  Route::resource('medical', MedicalController::class);
 // Dans routes/web.php
Route::get('/medical/create', [MedicalController::class, 'create'])->name('medical.creation');
Route::resource('projets', ProjetController::class)->names([
    'index' => 'projets.index',
    'create' => 'projets.create',
    'store' => 'projets.store',
    'show' => 'projets.show',
    'edit' => 'projets.editer', // Ici vous définissez le nom personnalisé
    'update' => 'projets.update',
    'destroy' => 'projets.destroy',
]);
Route::post('/projets/{id}/publish', [ProjetController::class, 'publishItem'])->name('projets.publishItem');

Route::post('/projets/{id}/unpublish', [ProjetController::class, 'unpublishItem'])->name('projets.unpublishItem');
// Route::post('/publish/{id}', [ProjetController::class, 'publishItem'])->name('publishItem');
Route::get('/welcome', [ProjetController::class, 'welcome'])->name('welcome');


require __DIR__.'/auth.php';
