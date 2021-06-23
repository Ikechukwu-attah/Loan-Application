<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeloansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takeloans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->bigInteger('amount')->nullable();
            $table->bigInteger('requested_amount')->nullable();
            $table->string('status')->default(1);
            $table->string('disbursement_date')->nullable();
            $table->integer('interest_rate')->nullable();
            $table->string('repayment_date')->nullable();
            $table->integer('total_repaid')->nullable();
            

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
        Schema::dropIfExists('takeloans');
    }
}
