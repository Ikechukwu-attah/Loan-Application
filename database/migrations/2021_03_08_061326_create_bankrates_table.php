<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankrates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('interest_rate')->nullable();
            $table->string('repayment_date')->nullable();
            $table->integer('week_days')->nullable();
            
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
        Schema::dropIfExists('bankrates');
    }
}
