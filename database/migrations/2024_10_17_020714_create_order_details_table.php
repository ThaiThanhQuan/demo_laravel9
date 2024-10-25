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
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer("OrderNumber");
            $table->foreign("OrderNumber")->references("OrderNumber")->on("orders");
            $table->string("ProductCode",20)->nullable(false);
            $table->foreign("ProductCode")->references("ProductCode")->on("products");
            $table->integer("Quantity");
            $table->integer("OriginalPrice");
            $table->integer("SalePrice");
            $table->primary("OrderNumber","ProductCode");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
