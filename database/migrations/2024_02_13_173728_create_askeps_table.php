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
        Schema::create('askeps', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('kelompoks_id');
            $table->foreignId('diagnosas_id');
            $table->string('alamat');
            $table->date('tanggal');
            $table->foreignId('users_id');
            $table->string('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('askeps');
    }
};
