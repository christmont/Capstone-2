<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntervieweesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname',30)->nullable()->default('none');
            $table->string('mname',30)->nullable()->default('none');
            $table->string('lname',30)->nullable()->default('none');
            $table->string('relation',30)->nullable()->default('none');
            $table->BigInteger('contact')->nullable();
            $table->string('address')->nullable()->default('none');
            $table->date('bdate')->nullable();
            $table->string('cstat',20)->nullable()->default('none');
            $table->foreign('clients_id')->references('id')->on('clients')->onDelete('cascade');
            $table->integer('clients_id')->unsigned()->nullable();

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
        Schema::dropIfExists('interviewees');
    }
}
