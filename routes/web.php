<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CitationController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LikeController;
use App\Http\Middleware\Connection;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Page Index de citation
Route::get('index',[PageController::class,'index'])->name('index');

//Page Accueil
Route::get('/',[PageController::class,'accueil'])->name('accueil');

//Page Index 
Route::get('index',[PageController::class,'indexUtilisateur'])->name('index_user');

//Page Accueil
Route::get('accueil',[PageController::class,'accueilUtilisateur'])->name('accueil_user');

//Page  formulaire mon compte 
Route::get('Mon compte',[PageController::class,'monCompte'])->name('my_account');

//Page action MAJ mon compte
Route::post('mon compte',[PageController::class,'updateMonCompte'])->name('update_my_account');

//Page Auteur
Route::get('auteur',[PageController::class,'auteur'])->name('author');

//Page pour afficher les auteurs uniques
Route::get('auteurs/{id}',[PageController::class,'auteurUnique'])->name('single_author');

//Page Lettre
Route::get('auteurs/lettre/{id}',[PageController::class,'lettre'])->name('letter');

//Page Theme
Route::get('theme',[PageController::class,'theme'])->name('subject');

//Page pour afficher les themes uniques
Route::get('theme/{id}',[PageController::class,'themeUnique'])->name('single_subject');

//Page Proposition
Route::get('proposition',[PageController::class,'proposition'])->name('suggestion');

//Page d'inscription
Route::get('Inscription',[PageController::class,'formulaireInscription'])->name('form_register');

//Action Inscription
Route::post('inscription',[PageController::class,'actionInscription'])->name('action_register');

//Page Formulaire de connexion
Route::get('Connexion',[PageController::class,'formulaireConnexion'])->name('form_login');

//Action Connexion
Route::post('connexion',[PageController::class,'actionConnexion'])->name('action_login');

//Resource Personne
Route::resource('personnes',PersonneController::class)->names(
[
    'index'  => 'list_persons',
    'create' => 'add_person',
]);

//Resource Categorie
Route::resource('categories',CategorieController::class)->names(
[
    'index'  => 'list_categories',
    'create' => 'add_categorie',
    'edit'   => 'edit_categorie'
]);

//Resource Citation
Route::resource('citations',CitationController::class)->names(
[
    'index'  => 'list_citations',
    'create' => 'add_citation',
    'edit'   => 'edit_citation',
    'show'   => 'single_citation'
]);

   //Resource Like
   Route::resource('likes',LikeController::class)->names(
    [
        'index'  => 'list_likes',
        'create' => 'add_like',
    ]);

    
//GROUPE MIDDLEWARE **************************************
// Route::group(['middleware' => ['Connection']], function () {
    
 
// });

Route::get('citation/{id}',[PageController::class,'fakeDeleteCitation'])->name('fake_delete_citation');


//Deconnexion
Route::get('/deconnexion',[PageController::class,'deconnexion'])->name('deconnexion');