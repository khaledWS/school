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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('mother_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('id_number')->nullable();
            $table->string('religion')->default('muslim');
            $table->date('birth_date')->nullable();
            $table->date('addmission_date')->nullable();
            $table->date('leaving_date')->nullable();
            $table->boolean('enrolled')->default(true);
            $table->string('picture')->nullable();
            $table->string('email')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->text('documents')->nullable()->comment('a list of papers like CV..ect');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('students');
    }
};
