<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexSwipersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_swipers', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('title'); 
            $table->longText('img1');
            $table->longText('img2');
            $table->text('text');
            $table->longText('website');
            $table->integer('sort');
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
        Schema::dropIfExists('index_swipers');
    }
}
