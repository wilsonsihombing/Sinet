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
        Schema::create('qna', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question');
            $table->text('answer')->nullable();
            $table->unsignedBigInteger('posted_by');
            $table->unsignedBigInteger('answered_by')->nullable(); 
            $table->softDeletes();
            $table->timestamps();

            // Menambahkan foreign key constraint untuk relasi user
            $table->foreign('posted_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('answered_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qna');
    }
};
