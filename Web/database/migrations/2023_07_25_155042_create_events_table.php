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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->integer('IsActive');
            // $table->integer('verified');
            $table->string('uraian');
            $table->string('tujuan');
            $table->text('link_meet')->nullable();
            $table->date('tanggal');
            $table->time('waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
