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
        Schema::table('users', function (Blueprint $table) {
            //

            $table->string('phone')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('role')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['phone', 'region', 'district', 'role', 'gender', 'dob']);
        });
    }
};
