<?php

namespace App\Http\Controllers;

use App\Models\like;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $like = Like::where('user_id',auth()->user()->id)->count();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $like = Like::where('citation_id',$request->post)->where('user_id',$request->utilisateur)->first();

        if ($like === null) {
            $insert = Like::firstOrCreate(
            [
                'user_id'     => $request->utilisateur,
                'citation_id' => $request->post,
            ],
           );
            Flashy::success('Vous avez liké cette citation');
            return back();
        }
        else{
            $insert = $like->delete();

            // $insert = $like->update([
            //     'user_id'     => $request->utilisateur,
            //     'citation_id' => $request->post,
            // ]);
            Flashy::error('Vous avez disliké cette citation');
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
