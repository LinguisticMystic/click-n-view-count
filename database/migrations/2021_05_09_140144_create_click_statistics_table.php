<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClickStatisticsTable extends Migration
{
    public function up(): void
    {
        Schema::create('click_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banner_id');
            $table->integer('clicks');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('click_statistics');
    }
}
