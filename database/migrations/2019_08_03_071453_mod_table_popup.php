<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModTablePopup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('popup', function (Blueprint $table) {
            $table->string('place')->nullable();

            $table->string('image_1')->nullable();
            $table->string('text_1')->nullable();
            $table->string('url_1')->nullable();

            $table->string('image_2')->nullable();
            $table->string('text_2')->nullable();
            $table->string('url_2')->nullable();

            $table->string('image_3')->nullable();
            $table->string('text_3')->nullable();
            $table->string('url_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
