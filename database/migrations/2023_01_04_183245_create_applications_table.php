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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('first_name')->required();
            $table->string('last_name')->required();
            $table->string('email')->required();
            $table->integer('phone_number');
            $table->string('about')->required();
            $table->string('education')->required();
            $table->string('skills')->required();
            $table->string('experience')->required();
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
        Schema::dropIfExists('applications');
    }
};
