<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Curso;
use App\Models\Aula;
use App\Models\SubTarefa;
use App\Models\Tarefa;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       $cursosMenu = Curso::all();
       view()-> share('cursosMenu', $cursosMenu);
       $aulasMenu = Aula::all();
       view()-> share('aulasMenu', $aulasMenu);
       $tarefasMenu = Tarefa::all();
       view()-> share('tarefasMenu', $tarefasMenu);
       $subTarefasMenu = SubTarefa::all();
       view()-> share('subTarefasMenu', $subTarefasMenu);
    }
}
