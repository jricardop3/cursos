<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('site.home', compact('curso'));
        
    }
    public function index2()
    {
        $cursos = Curso::paginate(5);
        $users = User::all();
        return view('admin.cursos', compact('cursos','users'));
        
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso = $request->all();
        if ($request->imagem) {
        $curso['imagem'] = $request->imagem->store('imagem');
        }
        $curso = Curso::create($curso);
        return redirect()->route('admin.cursos')->with('success','Curso Adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('admin.cursos')->with('Sucesso', "Excluido com sucesso!");
    }
}
