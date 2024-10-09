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
        Schema::create('retake_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('fio_teacher');
            $table->date('date');
            $table->time('time');
            $table->text('classroom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retake_schedules');
    }
};
