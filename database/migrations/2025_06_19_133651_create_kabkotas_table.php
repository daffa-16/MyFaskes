<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('kabkotas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_kabkota', 150);
            $table->unsignedBigInteger('provinsi_id');
            $table->timestamps();

            $table->foreign('provinsi_id')->references('provinsi_id')->on('provinsis')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kabkotas');
    }
};
