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
        Schema::create('user_list', function (Blueprint $table) {
            $table->bigInteger('usrlst_id')->primary();
            $table->string('usrlst_user_group_id', 400)->nullable();
            $table->string('usrlst_name', 400)->nullable();
            $table->string('usrlst_email', 400)->nullable();
            $table->string('usrlst_contact', 400)->nullable();
            $table->string('usrlst_login_flag', 400)->nullable();
            $table->string('usrlst_last_updated', 400)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_list');
    }
};
