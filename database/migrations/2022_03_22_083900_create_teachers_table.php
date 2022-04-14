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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first-name');
            $table->string('middle-name');
            $table->string('last-name');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('ssn')->nullable();
            $table->string('picture')->nullable();
            $table->date('birth_Date')->nullable();
            $table->date('join_date');
            $table->date('leave_date')->nullable();
            $table->boolean('active')->default(true);
            $table->string('religion')->default('muslim');
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->text('notes')->nullable()->comment('Notes');
            $table->text('documents')->nullable()->comment('a list of papers like CV..ect');
            $table->boolean('is_admin')->default(false);
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
        Schema::dropIfExists('teachers');
    }
};
