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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer("OrderNumber")->primary();
            $table->dateTime("OrderCreated");
            $table->string("CustomerCode",20)->nullable(false);
            $table->foreign("CustomerCode")->references("CustomerCode")->on("customers");
            $table->string("EmployeeCode",20)->nullable(false);
            $table->foreign("EmployeeCode")->references("EmployeeCode")->on("employees");
            $table->integer("Total")->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
