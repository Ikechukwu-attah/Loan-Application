<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('residential_address')->nullable();
            $table->string('LGA')->nullable();
            $table->string('state')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->bigInteger('phone_number')->nullable();
            $table->string('avertar')->nullable();
            $table->string('city')->nullable();
            $table->string('emergency_fullname')->nullable();
            $table->string('emergency_relationship')->nullable();
            $table->bigInteger('emergency_phone_number')->nullable();
            $table->string('emergency_address')->nullable();
            $table->string('emergency_fullname1')->nullable();
            $table->string('emergency_relationship1')->nullable();
            $table->bigInteger('emergency_phone_number1')->nullable();
            $table->string('emergency_address1')->nullable();
            $table->string('employment_status')->nullable();
            

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
        Schema::dropIfExists('addresses');
    }
}
