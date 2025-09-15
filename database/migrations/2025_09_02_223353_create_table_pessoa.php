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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id();//campo id inteiro auto increment e chave primária
            $table->string('nome', 50);
            $table->string('cpf', 14)->unique();
            $table->string('email', 50)->nullable();
            $table->string('telefone', 15)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo', ['Masculino', 'Feminino', 'O'])->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('cep', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pessoa');
    }
};
