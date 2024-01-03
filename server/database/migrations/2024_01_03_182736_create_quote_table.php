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
        Schema::create('quote', function (Blueprint $table) {
            $table->id();
            
            $table->string('content');

            $table->unsignedBigInteger('id_book');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_book')->references('id')->on('book');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote');
    }
};
