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
        Schema::table('touchables', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_content')->nullable();

        
            $table->foreign('id_content')
              ->references('id')
              ->on('contents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('touchables', function (Blueprint $table) {
            $table->dropForeign(['id_contents']);
            $table->dropColumn('id_contents');
        });
    }
};
