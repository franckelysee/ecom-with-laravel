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
        //
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null')->onUpdate('cascade');

            Schema::enableForeignKeyConstraints();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('categories', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('parent_id');
            $table->dropColumn('parent_id');
            //
        });
    }
};
