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
            $table->string('sex')->after('address')->nullable();
            $table->string('place_of_birth')->after('sex');
            $table->string('citizenship')->after('place_of_birth');
            $table->string('religion')->after('citizenship');
            $table->string('civil_status')->after('religion');
            
           
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
