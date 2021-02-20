<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Http\Requests\CitationFormRequest;

class CitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('create',Citation::class);

        $citation = Citation::where('etat',0)->get();

        //Liste des fausses citations supprimées par l'utilisateur
        $citation_fake_delete = Citation::where('etat',1)->get();

        //Nombre de citations supprimées par l'utilisateur
        $nombre_citation  = Citation::where('user_id',auth()->user()->id)->where('etat',0)->count();

        //Citation des clients
        $client = Citation::where('etat',0)->where('user_id',auth()->user()->id)->get();

        $mot = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos minus, neque, alias ipsa accusamus adipisci, sint cumque est eum praesentium amet? Numquam earum exercitationem illo dolores laudantium iste dolor voluptate.';
        $count = Str::length($mot);
        // dd($count);
        return view('citations.list_citations',compact('citation','citation_fake_delete','nombre_citation','client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Citation::class);
        
        $categorie = Categorie::all();
        return view('citations.add_citation',compact('categorie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CitationFormRequest $request)
    {
        $name       = auth()->user()->id;
        $image      = $request->file('profil');
        $image_name = time().'.'.$image->extension();
        $image->move(public_path('Zone'),$image_name);

        $citation = Citation::firstOrCreate([
            'auteur'    => ucfirst($request->auteur),
            'categorie' => $request->categorie,
            'citation'  => $request->citation,
        ],
        [
            'profil'    => $image_name,
            'date'      => date('Y-m-d'),
            'user_id'   => Auth::user()->id,
        ]);

        if ($citation) {
            Flashy::success('Vous avez posté une nouvelle citation');
            return back();
        } else {
           Flashy::error("Echec d'envoie !");
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
        //Definir 150 mot maximum pour la citation
        $quote       = Citation::findOrFail($id);
        $mot         = "&#8220; ".$quote->citation." &#8221;" . "\n  \n". '- '.$quote->auteur;
        $mot_sub1    = Str::of($mot)->substr(0,50);
        $mot_sub2    = Str::of($mot)->substr(50,1000);
        $mot_complet = $mot_sub1."\n".$mot_sub2;

        $img = Image::make('Zone/Black.png');  
        $img->resize(728,300);
        $img->text($mot_complet,350,200,function($font) {  
           $font->file(public_path('Zone/font/times-new-roman.ttf'));  
           $font->size(18);  
           $font->color('#FFFFFF');  
           $font->align('center');  
           $font->valign('bottom');  
           $font->angle(0);  
       });  
     
        // $img->save('Zone/text_with_image.jpg');  
        $img->encode('png');
        $type = 'png';
        $watermark = 'data:image/' . $type . ';base64,' . base64_encode($img);

        return view('citations.single_citation',compact('quote','watermark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citation  = Citation::findOrFail($id);
        $categorie = Categorie::all();
        return view('citations.edit_citation',compact('citation','categorie'));
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
            'auteur'    => 'required|string',
            'categorie' => 'required',
            'citation'  => 'required|string|max:150',
        ]);

        $citation = Citation::findOrFail($id);
        $update = $citation ->update([
            'auteur'    => ucfirst($request->auteur),
            'categorie' => $request->categorie,
            'citation'  => $request->citation,
        ]);
        if ($update) {
           Flashy::success('Modification réussie');
           return redirect()->route('list_citations');
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
        //
    }
}
