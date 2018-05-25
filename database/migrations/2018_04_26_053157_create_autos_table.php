<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('info')->nullable();
            $table->string('price')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('type_name')->nullable();
            $table->string('img_path')->nullable();


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
        Schema::dropIfExists('autos');
    }
}
