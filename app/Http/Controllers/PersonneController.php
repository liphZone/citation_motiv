<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonneFormRequest;
use App\Http\Requests\UserFormRequest;
use App\Models\Personne;
use App\Models\User;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('create',Personne::class);

        $personne = Personne::all();
        return view('personnes.list_persons',compact('personne'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Personne::class);
        
        return view('personnes.add_person');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonneFormRequest $pers,UserFormRequest $user)
    {
        $personne = Personne::firstOrCreate([
            'nom'              => strtoupper($pers->nom),
            'prenom'           => ucfirst($pers->prenom),
            'sexe'             => $pers->sexe,
            'contact'          => $pers->contact,
            'email'            => $pers->email,
            'adresse'          => $pers->adresse,
            'type_utilisateur' => 'Admin'
        ]);

        $user = User::firstOrCreate([
            'name'             => $user->name,
            'email'            => $user->email,
            'personne_id'      => $personne->id,
            
        ],
        [
            'password'         => bcrypt($user->name),
            'type_utilisateur' => 'Admin'
        ]);

        if ($personne AND $user) {
            Flashy::success('Merci de votre inscription');
            Flashy::success('Votre compte a été crée avec succès');
            return back();
        } else {
           Flashy::error("Echec d'inscription !");
           return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
