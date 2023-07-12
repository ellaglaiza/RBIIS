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
           Schema::create('residents', function (Blueprint $table) {
           $table->id();
           $table->string('firstname');
           $table->string('middlename')->nullable();
           $table->string('lastname');
           $table->string('suffix')->nullable();
           $table->string('purok');
           $table->string('address');
           $table->string('age');
           $table->string('date_of_birth');
           $table->string('place_of_birth');
           $table->string('sex');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
