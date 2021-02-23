<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodeMajelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periode_majelis', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_mulai', 10);
            $table->string('tahun_akhir', 10);
            $table->enum('status', ["AKTIF", "NONAKTIF"])->default("AKTIF");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periode_majelis');
    }
}
