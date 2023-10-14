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
            $table->integer('age')->after('civil_status');
            $table->string('date_of_birth')->after('place_of_birth');
            $table->string('remarks')->after('college')->nullable();
            $table->string('barangay')->after('remarks');
            $table->string('city_munipality')->after('barangay');
            $table->string('province')->after('city_munipality');
            $table->string('region')->after('province');
            $table->string('landlineNo')->after('region')->nullable();
            $table->string('contact_number')->after('landlineNo');
            $table->string('email')->after('contact_number')->nullable();
            $table->string('mother_name')->after('email');
            $table->string('father_name')->after('mother_name');
            $table->string('guardian')->after('father_name')->nullable();
            $table->string('senior_HS')->after('guardian')->nullable();

            $table->year('year_graduated1')->after('senior_HS')->nullable();
            $table->string('vocational')->after('year_graduated1')->nullable();
            $table->year('year_graduated2')->after('vocational')->nullable();
            $table->year('year_graduated3')->after('year_graduated2')->nullable();
            $table->year('year_graduated4')->after('year_graduated3')->nullable();
            $table->year('year_graduated5')->after('year_graduated4')->nullable();
            $table->string('occupation')->after('year_graduated5')->nullable();

            $table->string('status_of_employment')->after('occupation')->nullable();

            $table->string('type_of_employment')->after('status_of_employment')->nullable();
            $table->string('category_of_employment')->after('type_of_employment')->nullable();
            $table->string('members_name')->after('category_of_employment')->nullable();
            $table->string('members_dob')->after('members_name')->nullable();
            $table->string('members_relationship')->after('members_dob')->nullable();


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
