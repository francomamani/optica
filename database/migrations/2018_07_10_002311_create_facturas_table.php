<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_factura');
            $table->string('codigo_control');
            $table->date('fecha_expiracion');
            $table->date('fecha_emision');
            $table->string('nit_empresa');
            $table->float('monto_total', 6, 2);
            $table->enum('tipo_ingreso', ['venta', 'diagnostico']);
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
        Schema::dropIfExists('facturas');
    }
}
