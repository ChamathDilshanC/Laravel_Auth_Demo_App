<?php

use App\Models\User;
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
            // Model එක දෙනවා - automatically 'user_id' හදනවා
            $table->foreignIdFor(User::class)
                  ->constrained() // table name එක automatically හොයනවා
                  ->onDelete('cascade'); // User එකක් delete වුනාම එයාගේ todos ටික automatically delete වෙනවා

            // ඔයා column name එක දෙනවා
            // $table->foreignId('user_id')
            //       ->constrained('users') // table name එකත් දෙන්න වෙනවා
            //       ->onDelete('cascade');

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
