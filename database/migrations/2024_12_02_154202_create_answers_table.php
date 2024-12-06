<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('qna_id');
            $table->text('answer');
            $table->unsignedBigInteger('answered_by');
            $table->timestamps();

            // Relasi dengan tabel QnA
            $table->foreign('qna_id')->references('id')->on('qna')->onDelete('cascade');
            // Relasi dengan user yang menjawab
            $table->foreign('answered_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
