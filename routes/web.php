<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\PlaqueImmatriculationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;

// Route pour la page d'accueil
// Route pour la page d'accueil
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Routes pour les élèves
Route::prefix('eleves')->group(function () {
    // Afficher la liste des élèves
    Route::get('/', [EleveController::class, 'index'])->name('eleves.index');

    // Afficher le formulaire de création d'un élève
    Route::get('/create', [EleveController::class, 'create'])->name('eleves.create');

    // Enregistrer un nouvel élève
    Route::post('/', [EleveController::class, 'store'])->name('eleves.store');

    // Afficher les détails d'un élève
    Route::get('/{eleve}', [EleveController::class, 'show'])->name('eleves.show');

    // Afficher le formulaire de modification d'un élève
    Route::get('/{eleve}/edit', [EleveController::class, 'edit'])->name('eleves.edit');

    // Mettre à jour les informations d'un élève
    Route::put('/{eleve}', [EleveController::class, 'update'])->name('eleves.update');

    // Supprimer un élève
    Route::delete('/{eleve}', [EleveController::class, 'destroy'])->name('eleves.destroy');
});

// Routes pour les plaques d'immatriculation
Route::prefix('plaques')->group(function () {
    // Afficher la liste des plaques d'immatriculation
    Route::get('/', [PlaqueImmatriculationController::class, 'index'])->name('plaques.index');

    // Afficher le formulaire de création d'une plaque d'immatriculation
    Route::get('/create', [PlaqueImmatriculationController::class, 'create'])->name('plaques.create');

    // Enregistrer une nouvelle plaque d'immatriculation
    Route::post('/', [PlaqueImmatriculationController::class, 'store'])->name('plaques.store');

    // Afficher les détails d'une plaque d'immatriculation
    Route::get('/{plaque}', [PlaqueImmatriculationController::class, 'show'])->name('plaques.show');

    // Afficher le formulaire de modification d'une plaque d'immatriculation
    Route::get('/{plaque}/edit', [PlaqueImmatriculationController::class, 'edit'])->name('plaques.edit');

    // Mettre à jour les informations d'une plaque d'immatriculation
    Route::put('/{plaque}', [PlaqueImmatriculationController::class, 'update'])->name('plaques.update');

    // Supprimer une plaque d'immatriculation
    Route::delete('/{plaque}', [PlaqueImmatriculationController::class, 'destroy'])->name('plaques.destroy');
});

Route::get('/glpi', function () {
    return redirect('/glpi/index.php'); // Assurez-vous d'ajuster l'URL en fonction de votre configuration
});

// Route pour afficher le formulaire de connexion comme la page d'accueil
Route::get('/', [AuthController::class, 'showLoginForm'])->name('auth.login');

// Route pour traiter la soumission du formulaire de connexion
Route::post('/', [AuthController::class, 'login']);

// Route pour se déconnecter
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

