<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePopup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popup', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('site_id');

            $table->foreign('site_id')->references('id')->on('popup_site');

            $table->string('type')->nullable(false);

            $table->string('image')->nullable(true);
            $table->text('message')->nullable(true);
            $table->text('link')->nullable(true);

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
        Schema::dropIfExists('popup');
    }
}
