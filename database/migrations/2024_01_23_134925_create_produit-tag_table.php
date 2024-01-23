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
        Schema::create('produit_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('produit_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');

            $table->primary(['produit_id', 'tag_id']);

            Schema::enableForeignKeyConstraints();
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
