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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('idPekerja')->constrained('users')->onDelete('cascade');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->timestamps();
        });   

        Schema::create('orders_jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('order_date');
            $table->enum('status', ['pending', 'completed', 'cancelled']);
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders_jobs')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('rating')->unsigned()->comment('Rating between 1 to 5');
            $table->text('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('orders_jobs');
        Schema::dropIfExists('reviews');
    }
};
