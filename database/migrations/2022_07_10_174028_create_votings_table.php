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
        Schema::create('votings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dpt_id');
            $table->unsignedBigInteger('paslon_id');
            $table->string('vot');
            $table->timestamps();

            $table->foreign('dpt_id')->references('id')->on('dpts')->onUpdate('cascade');
            $table->foreign('paslon_id')->references('id')->on('paslons')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votings');
    }
};
