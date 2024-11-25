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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_name');
            $table->integer('ticket_price');
            $table->string('description');
            $table->enum('categories', ['Music', 'Sports', 'Education']);
            $table->dateTime('event_date');
            $table->string('location');
            $table->string('link_location');
            $table->string('poster_url');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
