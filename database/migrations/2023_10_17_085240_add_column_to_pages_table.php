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
        Schema::table('pages', function (Blueprint $table) {
            //
            $table->integer("imageWidth")->nullable();
            $table->integer("imageHeight")->nullable();
            $table->integer("imageLeft")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            //
            $table->dropColumn('imageWidth');
            $table->dropColumn('imageHeight');
            $table->dropColumn('imageLeft');
        });
    }
};
