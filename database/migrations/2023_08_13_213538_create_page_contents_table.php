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
        Schema::create('page_contents', function (Blueprint $table) {
            $table->unsignedBigInteger("id")->autoIncrement();

            $table->unsignedBigInteger('id_page')->nullable();
            $table->unsignedBigInteger('id_content')->nullable();
            $table->unsignedBigInteger('id_touchable')->nullable();

            $table->foreign('id_page')->references('id')->on('pages');
            $table->foreign('id_content')->references('id')->on('contents');
            $table->foreign('id_touchable')->references('id')->on('touchables');

            $table->string('positionX');
            $table->string('positionY');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_contents');
    }
};
