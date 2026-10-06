<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('gambar'); // isinya project1.jpg
            $table->string('tech');
            $table->string('status')->default('Selesai');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};