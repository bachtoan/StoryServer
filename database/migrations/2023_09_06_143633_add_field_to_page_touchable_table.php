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
        Schema::table('page_touchables', function (Blueprint $table) {
            //
            $table->string('touchWidth')->nullable();
            $table->string('touchHeight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page_touchables', function (Blueprint $table) {
            //
            $table->dropColumn(['touchWidth', 'touchHeight']);
        });
    }
};
