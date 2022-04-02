<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGogpointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gogpoint', function (Blueprint $table) {
            $table->id();
            $table->string('request_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('status')->default('pending')->nullable();
            $table->string('phone');
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('amount');
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
        Schema::dropIfExists('gogpoint');
    }
}
