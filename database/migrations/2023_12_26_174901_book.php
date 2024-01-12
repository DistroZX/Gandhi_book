<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.s
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('authorId');
            $table->unsignedBigInteger('categoryId');
            $table->integer('stock');
            $table->decimal('price');
            $table->timestamps();

            //foreign key constraints
            $table->foreign('authorId')->references('id')->on('authors');
            $table->foreign('genreId')->references('id')->on('genres');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
