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
        Schema::create('user_group', function (Blueprint $table) {
            $table->bigInteger('usgrp_id')->primary();
            $table->string('usgrp_company_name', 400)->nullable();
            $table->string('usgrp_last_updated', 400)->nullable();
            $table->binary('usgrp_govt_document')->nullable();
            $table->string('usgrp_cin', 400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_group');
    }
};
