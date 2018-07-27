<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oftalmologo_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('oftalmologo_id')
                ->references('id')
                ->on('oftalmologos')
                ->onDelete('cascade');
            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');
            $table->string('concepto');
            $table->integer('medida_ojo_izquierdo');
            $table->integer('medida_ojo_derecho');
            $table->enum('tipo_enfermedad', [
                'miopia',
                'estigmatismo',
                'hipermetropia',
                'estravismo'
            ]);
            $table->integer('circunferencia_ojo_izquierdo');
            $table->integer('circunferencia_ojo_derecho');
            $table->integer('adicion');
            $table->integer('esfera');
            $table->integer('cilindro');
            $table->integer('dioptria');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosticos');
    }
}
