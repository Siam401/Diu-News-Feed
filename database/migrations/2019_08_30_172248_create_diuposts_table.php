<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiupostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diuposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('content','1500')->nullable();
            $table->integer('diucat_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->string('tag')->nullable();
            $table->string('author')->nullable();
            $table->integer('count')->default('0');
            $table->string('status')->default(0);
            $table->timestamps();

            $table->foreign('diucat_id')->references('id')->on('diucats');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diuposts');
    }
}
