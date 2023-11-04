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
            $table->string('elementary')->after('civil_status')->nullable()->change();
            $table->string('high_school')->after('elementary')->nullable()->change();
            $table->string('year_graduated1')->after('senior_HS')->nullable()->change();
            $table->string('year_graduated2')->after('vocational')->nullable()->change();
            $table->string('year_graduated3')->after('year_graduated2')->nullable()->change();
            $table->string('year_graduated4')->after('year_graduated3')->nullable()->change();
            $table->string('year_graduated5')->after('year_graduated4')->nullable()->change();
            $table->string('degree_received')->after('college')->nullable();
            $table->string('special_skills')->after('degree_received')->nullable();
            $table->string('householdNO')->after('special_skills')->nullable();
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
