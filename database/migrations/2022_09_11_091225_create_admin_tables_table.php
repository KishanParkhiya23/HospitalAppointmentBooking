<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_tables', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->nullable();
            $table->string('Password')->nullable();
            $table->string('Name')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Gender')->nullable();
            $table->string('designation')->nullable();
            $table->string('img')->nullable();
            $table->string('Details')->nullable();
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
        Schema::dropIfExists('admin_tables');
    }
}
