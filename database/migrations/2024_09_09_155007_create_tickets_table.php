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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('agent_name');
            $table->string('agent_code');
            $table->string('start_city');
            $table->string('end_city');
            $table->string('start_location');
            $table->string('end_location');
            $table->date('start_date');
            $table->date('end_date'); 
            $table->string('start_time');
            $table->string('end_time');
            $table->date('order_date');
            $table->string('order_time');
            $table->string('chair_no');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
