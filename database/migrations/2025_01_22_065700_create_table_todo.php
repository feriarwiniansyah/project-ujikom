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
            $table->string('todo_name');//membuat nama tugas
            $table->enum(
                'status',
                ['SELESAI', 'BELUM SELESAI']);//membuat status
            $table->enum(
                'priority',
                ['PENTING', 'TIDAK PENTING',]);//membuat prioritas
            $table->timestamps();//membuat create dan update upload at
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
