<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizenshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizenships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->unique();
             $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('client_id')->unsigned()->nullable();
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
        Schema::dropIfExists('citizenships');
    }
}
