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
        Schema::create('regulatory_compliance', function (Blueprint $table) {
            $table->bigInteger('regcmp_id')->primary();
            $table->bigInteger('regcmp_compliance_id')->nullable();
            $table->string('regcmp_compliance_key', 400)->nullable();
            $table->integer('regcmp_remind_before_days')->nullable();
            $table->string('regcmp_status', 400)->nullable();
            $table->string('regcmp_approver_email', 400)->nullable();
            $table->binary('regcmp_compliance_document')->nullable();
            $table->string('regcmp_escalation_email', 400)->nullable();
            $table->string('regcmp_requested_date', 400)->nullable();
            $table->string('regcmp_completed_date', 400)->nullable();
            $table->bigInteger('regcmp_user_id')->nullable();
            $table->bigInteger('regcmp_user_group_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regulatory_compliance');
    }
};
