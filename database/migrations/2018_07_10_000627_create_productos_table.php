<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('optica_id')->unsigned();
            $table->integer('venta_id')->unsigned();
            $table->foreign('optica_id')
                ->references('id')
                ->on('opticas')
                ->onDelete('cascade');
            $table->foreign('venta_id')
                ->references('id')
                ->on('ventas')
                ->onDelete('cascade');
            $table->string('descripcion');
            $table->float('precio', 6, 2);
            $table->string('marca');
            $table->string('modelo');
            $table->integer('cantidad')->unsigned();
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
        Schema::dropIfExists('productos');
    }
}
