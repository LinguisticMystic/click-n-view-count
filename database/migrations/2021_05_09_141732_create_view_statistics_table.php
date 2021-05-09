<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewStatisticsTable extends Migration
{
    public function up(): void
    {
        Schema::create('view_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banner_id');
            $table->integer('views');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('view_statistics');
    }
}
