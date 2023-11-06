<?php

namespace App\Http\Controllers;

use App\Models\SubTarefa;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubTarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subtarefas = SubTarefa::all();
        return view('site.tarefas', compact('tarefas'));
    }
    public function index2()
    {
        $subTarefas = SubTarefa::paginate(1);
        $tarefas = Tarefa::all();
        return view('admin.subtarefas', compact('subTarefas','tarefas'));
        
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
        $subtarefa = $request->all();
        if ($request->imagem) {
            $subtarefa['imagem'] = $request->imagem->store('imagem');
            }
        if ($request->video) {
            $subtarefa['video'] = $request->video->store('video');
        }
        $subtarefa['slug'] = str::slug($request->subtarefa);    
        $subtarefa = subtarefa::create($subtarefa);
        return redirect()->route('admin.subtarefas')->with('success','Aula Adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubTarefa $subTarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubTarefa $subTarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubTarefa $subTarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subTarefa = SubTarefa::find($id);
        $subTarefa->delete();
        return redirect()->route('admin.subtarefas')->with('Sucesso', "Excluido com sucesso!");
    }
}
