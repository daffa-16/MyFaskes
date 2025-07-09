<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jenisfaskes', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_jenis', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jenisfaskes');
    }
};
