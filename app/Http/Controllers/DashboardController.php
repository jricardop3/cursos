<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Aula;

class DashboardController extends Controller
{
    public function index(){
        $usuarios = User::all()->count();
        //grafico 01 - usuario

        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')
        ->orderBy('ano','asc')
        ->get();

        //preparar arrays
        foreach ($usersData as $user){
            $ano[] = $user->ano;
            $total[] = $user->total;
        }
        //formatar para chartjs
        $userLabel = "'Comparativo de cadastros de usuarios'";
        $userAno = implode(",", $ano);
        $userTotal = implode(",", $total);
        
        //grafico 02 cursos.
        $curosDate = Curso::all();
        foreach ($curosDate as $cursoDate){
            $cursoCurso[] = "'".$cursoDate->curso."'";
            $cursoTotal[] = Aula::where('id_curso', $cursoDate->id)->count();
        }
        //formatação para chatjs
        $cursoDateLabel = implode (',', $cursoCurso);
        $cursoDateTotal = implode (',', $cursoTotal);
        return view('admin.dashboard',compact('usuarios','userLabel','userAno', 'userTotal', 'cursoDateLabel', 'cursoDateTotal'));
    }
}
