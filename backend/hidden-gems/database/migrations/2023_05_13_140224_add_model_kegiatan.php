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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table -> foreignId('tempat_pariwisata_id') -> constrained() -> onDelete('cascade');
            $table->string('name');
            $table->longText('description');
            $table->integer('harga');
            $table->string('waktu');
            $table->float('rating');
            $table-> longText('image_post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
