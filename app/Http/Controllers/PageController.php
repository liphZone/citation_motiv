<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Citation;
use App\Models\Personne;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\PersonneFormRequest;
use App\Http\Requests\ConnexionFormRequest;

class PageController extends Controller
{
    /* Page pour le template Quote */
    public function index(){
        return view('layout.quote.index');
    }
    
    public function accueil(){
        $categorie = Categorie::all();
        $citation  = Citation::where('etat',0)->get();
        $auteur    = range('A','Z');   
        return view('layout.quote.accueil',compact('categorie','citation','auteur'));
    }

    /* ---Fin--- */

    public function indexUtilisateur(){
        return view('layout.utilisateur.index');
    }

    public function accueilUtilisateur(){
        return view('layout.utilisateur.accueil');
    }

    public function monCompte(){
        $user = Personne::where('id',auth()->user()->personne_id)->first();
        return view('layout.utilisateur.mon_compte',compact('user'));
    }

    public function updateMonCompte(){
        $user = Personne::where('id',auth()->user()->personne_id)->first();

        $maj = $user->update([
            'nom'     => request('nom'),
            'prenom'  => request('prenom'),
            'contact' => request('contact'),
            'email'   => request('email'),
            'adresse' => request('adresse'),
        ]);

        if ($maj) {
            Flashy::success('Modification réussie');
            return back();
        } else {
            Flashy::error('Echec lors de la modification !');
            return back();
        }
    }

    public function auteur(Request $request){
        $auteur = range('A','Z');
        return view('pages.auteur',compact('auteur','request'));
    }

    public function auteurUnique(Request $request){
        $citation = Citation::where('auteur',$request->id)->where('etat',0)->get();
        return view('pages.single_auteur',compact('request','citation'));
    }

    public function theme(){
        $theme = Categorie::all();
        return view('pages.theme',compact('theme'));
    }

    public function themeUnique(Request $request){
        $theme = Categorie::where('libelle_categorie',$request->id)->first();
        $count_theme = Categorie::where('id',$request->id)->count();
        $citation = Citation::where('categorie',$request->id)->where('etat',0)->get();
        return view('pages.single_theme',compact('theme','count_theme','citation'));
    }

    //Page pour afficher les auteurs suivant les lettres alphabetiques
    public function lettre(Request $request){
        $citation = Citation::all();
        return view('pages.lettre',compact('request','citation'));
    }
   
    public function proposition(){
        return view('pages.proposition');
    }

    public function formulaireInscription(){
        return view('layout.connection.inscription');
    }

    public function actionInscription(PersonneFormRequest $pers,UserFormRequest $user){
        $personne = Personne::firstOrCreate([
            'nom'     => strtoupper($pers->nom),
            'prenom'  => ucfirst($pers->prenom),
            'sexe'    => $pers->sexe,
            'contact' => $pers->contact,
            'email'   => $pers->email,
            'adresse' => $pers->adresse,
        ]);

        $user = User::firstOrCreate([
            'name'        => $user->name,
            'email'       => $user->email,
            'personne_id' => $personne->id,
        ],
        [
            'password'    => bcrypt($user->name),
        ]);

        if ($personne AND $user) {
            Flashy::success('Merci de votre inscription');
            Flashy::success('Votre compte a été crée avec succès');
            return redirect('/');
        } else {
           Flashy::error("Echec d'inscription !");
           return back();
        }
    }

    public function formulaireConnexion(){
        return view('layout.connection.connexion');
    }

    public function actionConnexion(ConnexionFormRequest $request){
        $login = Auth::attempt(
        [
            'name'     => $request->name,
            'password' => $request->password
        ]);

        if ($login) {
            if (auth()->user()->type_utilisateur === 'Admin')
            {
                Flashy::success('Bienvenu(e)');
                return redirect()->route('accueil');
            }
            elseif(auth()->user()->type_utilisateur === 'Client'){
                Flashy::success('Bienvenu(e)');
                return redirect()->route('accueil');
            }
            else
            {
                Flashy::error("Erreur de connexion");
                return back();
            }
        }
        return back()->withInput()->withErrors([
            'name' => 'Identifiant ou mot de passe incorrect.',
        ]);
    }

    //Fake suppression des citations 
    public function fakeDeleteCitation($id){
        $citation = Citation::where('id',$id)->first();

        $delete = $citation->update([
            'etat' => 1
        ]);
        Flashy::success('Votre poste a été supprimé');
        return back();
    }

    public function deconnexion(){
        $dec = Auth::logout();
        Flashy::success('Vous êtes déconnecté(e).');
        return redirect('/');
    }
}
