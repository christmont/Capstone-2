<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clfname',50);
            $table->string('clmname',50)->nullable()->default('none');
            $table->string('cllname',50);
            $table->string('clreligion',50)->nullable();
            $table->string('clcitizenship',50)->nullable();
            $table->text('claddress',150);
            $table->string('clemail',50)->nullable();
            $table->smallInteger('clmonthly_net_income')->nullable();
            $table->date('clbdate')->nullable();
            $table->string('clgender',10)->nullable();
            $table->string('clcivil_status',30)->nullable();
            $table->string('cleducational_attainment',50)->nullable();
            $table->string('cllanguage',50)->nullable();
            $table->BigInteger('clcontact_no')->nullable();
            $table->string('nature_of_request',100);
            $table->string('cldetained',5)->nullable();
            $table->date('cldetained_since')->nullable();
            $table->string('clplace_of_detention',100)->nullable()->default('none');
            $table->string('clspouse',50)->nullable();
            $table->string('claddress_of_spouse',200)->nullable()->default('none');
            $table->BigInteger('clcontact_no_of_spouse')->nullable();
            $table->string('cl_status')->nullable()->default('Pending');
            $table->string('reason')->nullable();
            $table->string('clcity',50)->nullable();
            $table->string('clctcno',50)->nullable();
            $table->string('clnotarydate',50)->nullable();
            $table->string('documenttype',50)->nullable();
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
        Schema::dropIfExists('clients');
    }
}
