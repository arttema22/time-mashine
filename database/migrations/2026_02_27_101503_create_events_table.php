<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->dateTime('started_at');
            $table->dateTime('ended_at')->nullable();
            $table->text('description')->nullable();
            $table->nullableMorphs('eventable');
            $table->string('category')->nullable();
            $table->string('cover_image')->nullable();
            $table->timestamps();

            $table->index('started_at');
            $table->index(['eventable_type', 'eventable_id', 'started_at']);
            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
