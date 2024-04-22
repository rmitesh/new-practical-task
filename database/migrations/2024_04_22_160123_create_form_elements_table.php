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
        Schema::create('form_elements', function (Blueprint $table) {
            $table->id();
            $table->integer('form_id')->unsigned();
            $table->enum('name', ['text', 'select']);
            $table->string('label', 20);
            $table->enum('field_type', ['charecter', 'numeric']);
            $table->boolean('is_require')->default(false)->comment('0 - No, 1 - Yes');
            $table->boolean('is_email')->default(false)->comment('0 - No, 1 - Yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_elements');
    }
};
