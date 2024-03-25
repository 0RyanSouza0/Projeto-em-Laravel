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
        Schema::create('professors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descAparelho');
            $table->string('defeitoRelatado');
            $table->date('dataEntrada');
            $table->date('dataSaida');
            $table->string ('nomeCliente');
            $table->string('telefoneContato');
            $table->char('capa');
            $table->integer('chip');
            $table->string('operadoras');
            $table->char('caboUSB');
            $table->integer('cartaoMemoria');
            $table->string('observacao');
            $table->string('assinatura');
            $table->decimal ('salario');
            $table->integer('idade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
