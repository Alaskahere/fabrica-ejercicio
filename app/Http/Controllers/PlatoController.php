<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platos = Plato::with('categoria')->get();
        return view('platos.index',compact('platos'));
    }

    
    public function create()
    {
        $categorias = Categoria::all();
        return view('platos.create',compact('categorias'));
    }

   
    public function store(Request $request)
    {
        Plato::create($request->all());
        return redirect()->route('dashboard');
    }

    public function show(Plato $plato)
    {
        return view('platos.show',compact('plato'));
    }

    
    public function edit(Plato $plato)
    {
        $categoria = Categoria::all();
        return view('platos.edit',compact('plato','categoria'));
    }

   
    public function update(Request $request, Plato $plato)
    {
        Plato::updated($request->all());
        return redirect()->route('dashboard');
    }

   
    public function destroy(Plato $plato)
    {
        $plato->delete();
        return redirect()->route('dashboard');
    }
}
