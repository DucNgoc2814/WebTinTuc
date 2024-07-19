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
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->id();
            $table->string('ma')->unique();
            $table->string('tieu_de');
            $table->text('noi_dung')->nullable();
            $table->text('mo_ta')->nullable();
            $table->integer('luot_xem')->default(0);
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_active')->default(true);

            $table->unsignedBigInteger('danh_muc_id')->nullable();
            $table->foreign('danh_muc_id')->references('id')->on('danh_mucs')->onDelete('cascade');
        
            $table->unsignedBigInteger('nguoi_dung_id')->nullable();
            $table->foreign('nguoi_dung_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bai_viets');
    }
};
