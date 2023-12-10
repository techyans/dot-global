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
        Schema::create('country_flag', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('country_flag');
            $table->string('country_email');
            $table->string('country_phone');
            $table->longText('office_add');
            $table->string('update_by')->nullable();
            $table->timestamps();
            $table->ipAddress('ip_add')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
