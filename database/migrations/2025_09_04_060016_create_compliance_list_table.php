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
        Schema::create('compliance_list', function (Blueprint $table) {
            $table->bigInteger('cmplst_id')->primary();
            $table->string('cmplst_compliance_key', 400)->nullable();
            $table->string('cmplst_act', 400)->nullable();
            $table->string('cmplst_particular', 400)->nullable();
            $table->string('cmplst_start_date', 400)->nullable();
            $table->string('cmplst_end_date', 400)->nullable();
            $table->string('cmplst_action_date', 400)->nullable();
            $table->string('cmplst_description', 400)->nullable();
            $table->string('cmplst_country', 400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compliance_list');
    }
};
