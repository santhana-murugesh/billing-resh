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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->text('company_address');
            $table->string('company_phone');
            $table->string('company_email')->nullable();
            $table->string('company_website')->nullable();
            $table->string('gst_number')->nullable();
            $table->string('logo')->nullable();
            $table->decimal('tax_rate', 5, 2)->default(18.00);
            $table->string('currency_symbol', 10)->default('₹');
            $table->string('invoice_prefix', 10)->default('ORD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
