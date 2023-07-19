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
            $table->string('sex');
            $table->string('place_of_birth');
            $table->string('citizenship');
            $table->string('religion');
            $table->integer('age');
            $table->string('civil_status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('residents', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('place_of_birth');
            $table->dropColumn('citizenship');
            $table->dropColumn('religion');
            $table->dropColumn('age');
            $table->dropColumn('civil_status');
        });
    }
};
