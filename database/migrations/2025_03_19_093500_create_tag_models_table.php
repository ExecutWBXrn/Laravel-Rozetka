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
        Schema::create('tag_table', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('job_tag_pivot_table', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\Job::class, 'jobs_listening_id')->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\TagModel::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_table');
        Schema::dropIfExists('job_tag_pivot_table');
    }
};
