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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('booking_id')
                ->constrained('bookings')
                ->restrictOnDelete()
                ->unique(); // 1 invoice per booking

            $table->decimal('amount', 10, 2); // base amount
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('total', 10, 2); // amount + tax

            $table->string('status')->default('pending'); // pending, paid

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
