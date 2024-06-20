<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Mesa;
use App\Models\Orden;
use App\Models\Plato;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordens = Orden::with(['platos','estado','mesa'])->get();
        return view('ordens.index',compact('ordens'));
    }


    public function create()
    {
        $mesa= Mesa::all();
        $estado= Estado::all();
        
        return view('ordens.create',compact('mesa','estado'));
    }

    
    public function store(Request $request)
    {
        Orden::create($request->all());
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orden $orden)
    {
        return view('ordens.show',compact('orden'));
    }

   
    public function edit(Orden $orden)
    {
       
        $estado= Estado::all();
        $mesa = Mesa::all();
        
        return view('ordens.edit',compact('platos','estado','orden','mesa'));
    }

    
    public function update(Request $request, Orden $orden)
    {
        $orden->update($request->all());
        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orden $orden)
    {
        $orden->delete();
        return redirect()->route('welcome');
    }
}
