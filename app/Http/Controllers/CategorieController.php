<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieFormRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('create',Categorie::class);

        $categorie = Categorie::all();
        return view('categories.list_categories',compact('categorie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Categorie::class);
        
        return view('categories.add_categorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieFormRequest $request)
    {
        $categorie = Categorie::firstOrCreate([
            'reference_categorie'   => strtoupper('REF-'.str_random(3)),
            'libelle_categorie'     => ucfirst($request->libelle_categorie),
            'description_categorie' => $request->description_categorie,
        ]);

        if ($categorie) {
            Flashy::success('Vous avez ajouté une catégorie');
            return back();
        } else {
           Flashy::error("Echec d'ajout !");
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
        $categorie = Categorie::findOrFail($id);
        return view('categories.edit_categorie',compact('categorie'));
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
        $request->validate([
            'libelle_categorie'     => 'required|string',
            'description_categorie' => 'required|string',
        ]);
        $categorie = Categorie::findOrFail($id);
        $update = $categorie ->update([
            'libelle_categorie'   => ucfirst($request->libelle_categorie),
        ]);
        if ($update) {
           Flashy::success('Modification réussie');
           return redirect()->route('list_categories');
        }else{
            Flashy::error("Echec de modification !");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Categorie::destroy($id);
        if ($delete) {
            Flashy::success('Vous avez supprimé une catégorie');
            return back();
        } else {
            Flashy::error('Echec de suppression');
            return back();
        }
    }
}
