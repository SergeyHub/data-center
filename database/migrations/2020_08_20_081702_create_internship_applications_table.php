<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('name');
            $table->string('middle_name');
            $table->date('birthday');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('phone');
            $table->string('uni_name')->nullable();
            $table->string('faculty')->nullable();
            $table->string('speciality')->nullable();
            $table->year('enroll_year')->nullable();
            $table->year('graduate_year')->nullable();
            $table->text('work_experience')->nullable();
            $table->text('other_internships')->nullable();
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
        Schema::dropIfExists('internship_applications');
    }
}
