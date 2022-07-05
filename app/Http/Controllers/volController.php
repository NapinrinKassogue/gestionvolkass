<?php

namespace App\Http\Controllers;

use App\Models\Listevols;
use Illuminate\Http\Request;
use App\Models\Vols;



class volController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vols = Vols::all();
        $listevols = Vols::all();
       return view('vols.voldispo', compact("vols","listevols"));
      
       
     
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code_vol' => 'required|max:255',
            'destination' => 'required',
            'date_depar' => 'required',
            'heure_depart' => 'required',
            'nombre_place_A' => 'required',
            'nombre_place_B' => 'required',
            'prix_classe_A' => 'required',
            'prix_classe_B' => 'required',
        ]);
    
        $vol = vols::create($validatedData);
    
        return redirect('/vols')->with('success', 'vol ajouter avec succèss');
    
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
        $vol = vols::findOrFail($id);

        return view('edit', compact('vol'));
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
