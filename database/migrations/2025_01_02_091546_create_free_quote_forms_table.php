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
        Schema::create('free_quote_forms', function (Blueprint $table) {
            $table->id();
            $table->string('your_name');
            $table->string('your_email');
            $table->string('your_mobile');
            $table->foreignId('all_service_name_id')->constrained('all_service_names')->onDelete('cascade');
            $table->text('special_note')->nullable();
            $table->enum('seen', ['yse', 'no'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_quote_forms');
    }
};
