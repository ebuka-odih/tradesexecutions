<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_traders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->bigInteger('trader_id');
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copy_traders');
    }
}
