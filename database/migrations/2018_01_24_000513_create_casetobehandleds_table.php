<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasetobehandledsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casetobehandleds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('casename',75);
            $table->string('interviewer',80);
            $table->string('nature_of_case',50);
            $table->string('clcase_involvement',50);
            $table->string('clcomplainant_victim_of',50);
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('client_id')->unsigned();
            $table->string('caseno')->nullable();
            $table->string('title')->nullable();
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            $table->integer('court_id')->unsigned();
            $table->string('case_status')->nullable()->default('Granted');
            $table->string('control_number',15)->nullable();
            $table->date('arraignmentDate')->nullable();
            $table->date('prelimconfDate')->nullable();
            $table->date('pretrialDate')->nullable();
            $table->date('inittrialdate')->nullable();
            $table->date('prosecevidence')->nullable();
            $table->date('defevidence')->nullable();
            $table->date('judgement date')->nullable();
            $table->date('promulgation')->nullable();
            $table->integer('count')->default(0);
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
        Schema::dropIfExists('casetobehandleds');
    }
}
