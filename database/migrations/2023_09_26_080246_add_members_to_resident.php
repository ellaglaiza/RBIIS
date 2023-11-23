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
            $table->string('occupation')->after('email')->nullable();
            $table->string('status_of_employment')->after('occupation')->nullable();
            $table->string('members_name')->after('status_of_employment')->nullable();
            $table->string('members_dob')->after('members_name')->nullable();
            $table->string('members_relationship')->after('members_dob')->nullable();
            $table->string('householdNO')->after('members_relationship')->nullable();



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
