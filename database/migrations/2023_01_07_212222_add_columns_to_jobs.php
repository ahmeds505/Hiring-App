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
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('location')->after('title')->nullable();
            $table->string('type')->after('location')->nullable();
            $table->string('working_hours')->after('type')->nullable();
            $table->string('salary')->after('working_hours')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('type');
            $table->dropColumn('working_hours');
            $table->dropColumn('salary');

        });
    }
};
