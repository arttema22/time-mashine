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
        Schema::create('affiliations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('people_id')->constrained()->onDelete('cascade');
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');

            $table->string('role')->nullable();
            $table->date('started_at');
            $table->date('ended_at')->nullable();
            $table->boolean('is_current')->virtualAs('ended_at IS NULL');

            $table->timestamps();

            $table->index(['organization_id', 'started_at']);
            $table->index(['people_id', 'started_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliations');
    }
};
