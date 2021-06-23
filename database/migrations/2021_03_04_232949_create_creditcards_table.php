<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditcards', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('status')->nullable();
            $table->string('authorization_code')->nullable();
            $table->string('channel')->nullable();
            $table->integer('exp_month')->nullable();
            $table->integer('exp_year')->nullable();
            $table->string('card_type')->nullable();
            $table->integer('last4')->nullable();
            $table->boolean('atm_status')->default(0);
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
        Schema::dropIfExists('creditcards');
    }
}
