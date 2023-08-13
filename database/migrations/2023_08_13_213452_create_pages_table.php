<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->unsignedBigInteger("id")->autoIncrement();
            $table->unsignedBigInteger('id_story')->nullable();
            $table->foreign('id_story')->references('id')->on('stories');
            $table->integer('page_number');
            $table->string('sound')->nullable();
            $table->string('background');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
