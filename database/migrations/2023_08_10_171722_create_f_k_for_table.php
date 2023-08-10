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
        Schema::table('page_content', function (Blueprint $table) {
            $table->unsignedBigInteger('id_page')->nullable();
            $table->unsignedBigInteger('id_content')->nullable();
            $table->unsignedBigInteger('id_touchable')->nullable();

            $table->foreign('id_page')->references('id')->on('page');
            $table->foreign('id_content')->references('id')->on('content');
            $table->foreign('id_touchable')->references('id')->on('touchable');

        });

        Schema::table('content', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sound')->nullable();
 
            $table->foreign('id_sound')->references('id')->on('sound');
        });
        Schema::table('touchable', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sound')->nullable();
 
            $table->foreign('id_sound')->references('id')->on('sound');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
    }
};
