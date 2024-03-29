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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('vendorName');
            $table->string('businessName');
            $table->string('businessType');
            $table->text('services');
            $table->text('serviceDescription')->nullable();
            $table->decimal('price', 10, 2); // Single price column
            $table->string('phone');
            $table->text('address');
            $table->text('additionalInfo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};

