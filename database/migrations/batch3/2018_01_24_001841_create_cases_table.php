<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawsuits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75)->unique();
            $table->foreign('casetobehandleds_id')->references('id')->on('casetobehandleds')->onDelete('cascade');
            $table->integer('casetobehandleds_id')->unsigned()->nullable();
            $table->foreign('casetype_id')->references('id')->on('casetypes')->onDelete('cascade');
            $table->integer('casetype_id')->unsigned()->nullable();
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
        Schema::dropIfExists('cases');
    }
}
