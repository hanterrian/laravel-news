<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bank extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('sum')->nullable();
            $table->string('rate')->nullable();
            $table->string('term_from')->nullable();
            $table->string('term_to')->nullable();
            $table->text('description')->nullable();
            $table->integer('link_type')->default(0);
            $table->string('link')->nullable();
            $table->string('link_to_site')->nullable();
            $table->text('data')->nullable();

            $table->integer('position')->default(0);

            $table->softDeletes();
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
        Schema::dropIfExists('banks');
    }
}
