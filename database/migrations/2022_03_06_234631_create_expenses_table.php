<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('purpose');
            $table->integer('amount');
           /////FK///////
           $table->unsignedBigInteger('fkuser');
           $table->foreign ('fkuser')->references('id')->on('users');
           $table->unsignedBigInteger('fkcompany');
           $table->foreign ('fkcompany')->references('id')->on('companies');
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
        Schema::dropIfExists('expenses');
    }
}
