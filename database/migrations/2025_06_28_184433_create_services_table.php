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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('service_type')->nullable();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('videos')->nullable();
            $table->string('service_rules')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->string('is_active')->default('1')->comment('1=active','0==inactive');
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
