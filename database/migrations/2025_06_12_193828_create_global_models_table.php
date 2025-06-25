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
        Schema::create('global_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->longText('address');
            $table->string('logo')->nullable();
            $table->string('fav_icon')->nullable();
            $table->longText('meta_info')->nullable();
            $table->longText('body_start_script')->nullable();
            $table->longText('body_end_script')->nullable();
            $table->string('trade_license_no')->nullable();
            $table->string('vat_register_no')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instragram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('x')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_models');
    }
};
