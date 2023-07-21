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
        Schema::table('residents', function (Blueprint $table) {
            $table->string('sex')->after('address');
            $table->string('place_of_birth')->after('sex');
            $table->string('citizenship')->after('place_of_birth');
            $table->string('religion')->after('citizenship');
            $table->integer('age')->after('religion');
            $table->string('civil_status')->after('age');
            $table->string('elementary')->after('civil_status');
            $table->string('high_school')->after('elementary');
            $table->string('college')->after('high_school');
            $table->string('degree_received')->after('college');
            $table->string('special_skills')->after('degree_received');
            $table->integer('year_graduated')->after('special_skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('residents', function (Blueprint $table) {
            //
        });
    }
};
