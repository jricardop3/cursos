<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTarefa extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'titulo',
        'descricao',
        'descricao',
        'tarefa',
        'conteudotarefa',
        'video',
        'conteudovideo',
        'imagem',
        'conteudoimagem',
        'mensagem',
        'id_tarefa',
    
    ];
}

