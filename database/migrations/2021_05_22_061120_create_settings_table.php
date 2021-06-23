<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('site_name')->nullable();
            $table->string('footer')->nullable();
            $table->string('menu')->nullable();
            $table->string('background_header')->nullable();
            $table->string('logo')->nullable();
            $table->integer('loan_interest')->nullable();
            $table->string('bank_name')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
