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
        Schema::create('customers', function (Blueprint $table) {
            $table->string("CustomerCode",20)->nullable(false)->primary();
            $table->string("email",100)->nullable(false);
            $table->string("password",60)->nullable(false);
            $table->string("FullName",40)->nullable(false);
            $table->string("Address",50)->nullable(false);
            $table->string("Phone",20)->nullable(false);
            $table->dateTime("Birthday");
            $table->dateTime("Registered");
            $table->integer("Sale")->default(0)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
