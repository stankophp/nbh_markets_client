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
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('role_id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('password');
            $table->string('phone_number');
            $table->string('address');
            $table->string('country');
            $table->string('trading_account_number');
            $table->float('balance');
            $table->integer('open_trades');
            $table->integer('closed_trades');
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
