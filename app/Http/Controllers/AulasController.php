<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Curso;
use App\Models\Tarefa;
use App\Models\SubTarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AulasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulas = Aula::paginate(3);
        $tarefas = Tarefa::all();
        $subtarefas = SubTarefa::all();
        return view('site.home', compact('aulas', 'tarefas','subtarefas'));        
    }
    public function index2()
    {
        $aulas = Aula::paginate(5);
        $cursos = Curso::all();
        return view('admin.aulas', compact('aulas', 'cursos'));
        
    }
     
    public function unico ($slug)
    {
        $aula = Aula::where('slug', $slug)->first();
        return view('site.aula', compact('aula'));
    }
    public function dois()
    {
        
        $tarefas = Tarefa::all();
        $subtarefas = SubTarefa::all();
        return view('site.aula', compact('tarefas','subtarefas'));        
    }
    public function curso ($id)
    {
        $curso = Curso::find($id);
        $aulas = Aula::where('id_curso', $id)->paginate(3);
        return view('site.curso', compact('aulas', 'curso'));
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
        $aula = $request->all();
        if ($request->imagem) {
        $aula['imagem'] = $request->imagem->store('imagem');
        }
        $aula['slug'] = str::slug($request->aula);
        $aula = Aula::create($aula);
        return redirect()->route('admin.aulas')->with('success','Aula Adicionada com sucesso!');
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
        $aula = Aula::find($id);
        $aula->delete();
        return redirect()->route('admin.aulas')->with('Sucesso', "Excluido com sucesso!");
    }
}
