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
        Schema::create('employees', function (Blueprint $table) {
            $table->string('EmployeeCode',20)->nullable(false)->primary();
            $table->string('Password',60)->nullable(false);
            $table->string('Email',100)->nullable(false);
            $table->string('Fullname',40)->nullable(false);
            $table->string('Phone',20)->nullable(false);
            $table->dateTime('Worked');
            $table->integer('Group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
