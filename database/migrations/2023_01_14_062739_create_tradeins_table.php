<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradeins', function (Blueprint $table) {
            $table->id();
            $table->string('tv_brand')->nullable();
            $table->string('tv_model')->nullable();
            $table->string('tv_condition')->nullable();
            $table->string('packaging')->nullable();
            $table->integer('tv_age')->default(0);
            $table->string('tv_accessories')->nullable();
            $table->integer('tv_value')->default(0);
            $table->string('tv_upgrade')->nullable();
            $table->integer('topup_amount')->default(0);
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
        Schema::dropIfExists('tradeins');
    }
};
