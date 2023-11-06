<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('titulo');
            $table->string('descricao');
            $table->text('tarefa')->nullable();
            $table->text('conteudotarefa')->nullable();
            $table->string('video')->nullable();
            $table->text('conteudovideo')->nullable();
            $table->string('imagem')->nullable();
            $table->text('conteudoimagem')->nullable();
            $table->text('mensagem');
            $table->unsignedBigInteger('id_tarefa');
            $table->foreign('id_tarefa')->references('id')->on('tarefas')->onDelete('cascade')->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_tarefas');
    }
};
