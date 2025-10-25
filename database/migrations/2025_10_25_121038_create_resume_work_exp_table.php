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
        Schema::create('resume_work_exp', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru',100)->nullable(false);
            $table->string('title_en',100)->nullable(false);
            $table->text('text_ru')->nullable(false);
            $table->text('text_en')->nullable(false);
            $table->string('color',50)->default('#00a651');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_work_exp');
    }
};
