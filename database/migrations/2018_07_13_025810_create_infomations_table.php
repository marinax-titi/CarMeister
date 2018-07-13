<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infomations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->length(255);
            $table->text('description');
            $table->string('title')->length(255);
            $table->dateTime('release_date');
            $table->tinyInteger('status')->length(2);
            $table->tinyInteger('status_role')->length(2);
            $table->timestamps('delete_at');
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
        Schema::dropIfExists('infomations');
    }
}
