<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('faskes', function (Blueprint $table) {
            $table->id('faskes_id');
            $table->string('nama_faskes');
            $table->string('alamat');
            $table->unsignedBigInteger('jenis_id'); // pastikan baris ini ada
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('kabkota_id');
            $table->timestamps();

            $table->foreign('jenis_id')->references('jenis_id')->on('jenisfaskes')->onDelete('cascade');
            $table->foreign('kategori_id')->references('kategori_id')->on('kategoris')->onDelete('cascade');
            $table->foreign('id')->references('kabkota_id')->on('kabkotas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
};

