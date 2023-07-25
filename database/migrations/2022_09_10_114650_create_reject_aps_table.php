<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRejectApsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reject_aps', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Email')->nullable();
            $table->string('Date')->nullable();
            $table->string('Service')->nullable();
            $table->string('Doctor')->nullable();
            $table->string('Confirmation')->nullable();
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
        Schema::dropIfExists('reject_aps');
    }
}
