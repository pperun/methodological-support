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
        Schema::create('disciplines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('course_id')
                ->constrained()
                ->onDelete('cascade');
            $table->unsignedBigInteger('lector_id');
            $table->foreign('lector_id')
                ->references('id')
                ->on('users');
            $table->unsignedBigInteger('practitioner_id');
            $table->foreign('practitioner_id')
                ->references('id')
                ->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplines');
    }
};
