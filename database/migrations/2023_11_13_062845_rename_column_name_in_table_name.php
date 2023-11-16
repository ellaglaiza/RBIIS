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
            $table->renameColumn('members_name', 'members_firstname')->nullable();
            $table->string('members_middlename')->after('members_name')->nullable();
            $table->string('members_lastname')->after('members_middlename')->nullable();
            $table->string('members_qualifier')->after('members_lastname')->nullable();
            $table->string('members_address')->after('members_qualifier')->nullable();
            $table->string('members_placeofbirth')->after('members_address')->nullable();
            $table->string('members_sex')->after('members_placeofbirth')->nullable();
            $table->string('members_school')->after('members_sex')->nullable();
            $table->string('members_religion')->after('members_school')->nullable();
            $table->string('members_occupation')->after('members_religion')->nullable();
            $table->string('members_remark')->after('members_relationship')->nullable();
            $table->string('family_id')->after('members_remark')->nullable();

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
