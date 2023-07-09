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
        Schema::create('borrowers_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('control_no')->nullable()->unique();
            $table->date('date_borrowed')->nullable();
            $table->date('date_return_plan')->nullable();
            $table->string('loc_for_use');
            $table->string('purpose');
            $table->string('lent_by');
            $table->date('date_return')->nullable();
            $table->integer('return_by_id')->nullable();
            $table->integer('received_by_id')->nullable();
            $table->boolean('del_data')->nullable();
            $table->text('condition')->nullable();
            $table->integer('check_by')->nullable();
            $table->integer('item_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowers_logs');
    }
};
