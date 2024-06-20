<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return  view('categorias.index',compact('categorias'));
    }

 
    public function create()
    {
        return view('categorias.create');
    }

    
    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect()->route('categorias.stores');
    }

    
    public function show(Categoria $categoria)
    {
        return view( 'categorias.show', compact('categoria'));
    }

    
    public function edit(Categoria $categoria)
    {
        $categoria->all();
        return view('categorias.edit',compact('categoria'));
    }

  
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect()->route('dashboard');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
    }
}
