<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Tarefa;
use App\Models\SubTarefa;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        $subtarefas = SubTarefa::all();
        return view('site.aulas', compact('tarefas','subtarefas'));
        
    }
    public function index2()
    {
        $subtarefas = SubTarefa::all();
        $aulas = Aula::all();
        $tarefas = Tarefa::paginate(5);
        return view('admin.tarefas', compact('tarefas','subtarefas', 'aulas'));
        
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
        $tarefa = $request->all();
        $tarefa = Tarefa::create($tarefa);
        return redirect()->route('admin.tarefas')->with('success','Tarefa Adicionada com sucesso!');
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
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect()->route('admin.tarefas')->with('Sucesso', "Excluido com sucesso!");
    }
}
