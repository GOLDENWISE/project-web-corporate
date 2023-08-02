<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('cooperations', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->foreignId('country_id');
            $table->foreignId('industry_id');
            $table->foreignId('organization_type_id');
            $table->string('name');
            $table->string('description');
            $table->date('cooperation_started_from');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooperations');
    }
};
