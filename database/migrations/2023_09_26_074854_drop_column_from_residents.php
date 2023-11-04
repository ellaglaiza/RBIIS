<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

 class DropColumnFromTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('residents', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('degree_received');
            $table->dropColumn('special_skills');
            $table->dropColumn('members_name');
            $table->dropColumn('members_dob');
            $table->dropColumn('members_relationship');

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
