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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // The headline
        $table->text('text');    // The thought content
        // Connects to the categories table
        $table->foreignId('category_id')->constrained()->onDelete('cascade'); 
        $table->timestamps();
    });
}// This was MISSING in your code - it closes the up() function

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};