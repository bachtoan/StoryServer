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
        Schema::create('contents', function (Blueprint $table) {
            $table->unsignedBigInteger("id")->autoIncrement();
            $table->string('content');

            $table->unsignedBigInteger('id_sound')->nullable();
            $table->foreign('id_sound')->references('id')->on('sounds');
            $table->string('sync_data',10000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
