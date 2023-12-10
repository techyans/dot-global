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
        Schema::create('media_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('media_name');
            $table->string('alt_text')->nullable();
            $table->longText('caption')->nullable();
            $table->string('added_by');
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
