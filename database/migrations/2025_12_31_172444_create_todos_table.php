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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            // Modern Laravel foreign key - user_id column එක create කරලා එක වරම foreign key constraint එකත් add කරනවා
            $table->foreignId('user_id')
                  ->constrained('users') // users table එක සමග link කරනවා
                  ->onDelete('cascade'); // User එකක් delete වුනාම එයාගේ todos ටික automatically delete වෙනවා
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('priority')->default('Medium');
            $table->string('status')->default('Pending');
            $table->date('due_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
