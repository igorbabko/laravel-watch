<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Module::class)->constrained();
            $table->smallInteger('order')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('video_id', 50); // ->unique();
            $table->string('commit', 100); // ->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
