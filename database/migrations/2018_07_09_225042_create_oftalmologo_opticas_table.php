<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOftalmologoOpticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oftalmologo_opticas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oftalmologo_id')->unsigned();
            $table->integer('optica_id')->unsigned();
            $table->foreign('oftalmologo_id')
                  ->references('id')->on('oftalmologos')->onDelete('cascade');
            $table->foreign('optica_id')
                  ->references('id')->on('opticas')->onDelete('cascade');
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
        Schema::dropIfExists('oftalmologo_opticas');
    }
}
