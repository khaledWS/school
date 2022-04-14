<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_semester', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id');
            $table->foreignId('semester_id');
            $table->foreignId('teacher_id')->nullable()->comment('مربي الفصل');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_semester');
    }
};
