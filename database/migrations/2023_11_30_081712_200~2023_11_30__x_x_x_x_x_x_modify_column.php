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
            $table->text('members_middlename')->change();
            $table->text('members_lastname')->change();
            $table->text('members_qualifier')->change();
            $table->text('members_address')->change();
            $table->text('members_placeofbirth')->change();
            $table->text('members_sex')->change();
            $table->text('members_religion')->change();
            $table->text('members_occupation')->change();
            $table->text('members_remark')->change();
            $table->text('members_age')->change();
            $table->text('members_civilstatus')->change();
            $table->text('members_name')->change();
            $table->text('members_dob')->change();
            $table->text('members_relationship')->change();

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
