<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->boolean('section_1_1')->default(True);
            $table->boolean('section_1_2')->default(False);
            $table->boolean('section_1_3')->default(False);
            $table->boolean('section_1_t')->default(False);
            $table->boolean('section_2_1')->default(False);
            $table->boolean('section_2_2')->default(False);
            $table->boolean('section_2_t')->default(False);
            $table->boolean('section_3_1')->default(False);
            $table->boolean('section_3_2')->default(False);
            $table->boolean('section_3_t')->default(False);
            $table->boolean('section_final_t')->default(False);
            $table->string('grade_1')->nullable();
            $table->string('grade_2')->nullable();
            $table->string('grade_3')->nullable();
            $table->string('grade_final')->nullable();
            $table->timestamps();

            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progresses');
    }
}
