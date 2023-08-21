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
        Schema::create('kangaroos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('name')->unique();
            $table->string('nickname')->nullable();
            $table->float('weight');
            $table->float('height');
            $table->string('gender');
            $table->string('color')->nullable();
            $table->string('friendliness')->nullable();
            $table->date('dob');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kangaroos');
    }
};
