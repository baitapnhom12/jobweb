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
        Schema::create('tbl_job', function (Blueprint $table) {
            $table->id('id_job');
            $table->text('name_job')->unique();
            $table->integer('quality');
            $table->string('price',50);
            $table->date('date');
            $table->text('desc');
            $table->text('skill');
            $table->integer('id_location');
            $table->integer('id');
            $table->string('slug_job',45)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_job');
    }
};
