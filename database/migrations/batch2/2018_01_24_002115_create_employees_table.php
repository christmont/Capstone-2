<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_no')->nullable();
            $table->string('efname',50);
            $table->string('emname',50)->nullable();
            $table->string('elname',50);
            $table->string('email',50)->unique();
            $table->string('position',50);
            $table->string('password',180);
            $table->bigInteger('contact');
            $table->rememberToken();
            $table->integer('casecount')->unsigned()->nullable()->default('0');
            $table->boolean('status')->unsigned()->default('1');
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade');
            $table->integer('court_id')->unsigned()->nullable();
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
        Schema::dropIfExists('employees');
    }
}
