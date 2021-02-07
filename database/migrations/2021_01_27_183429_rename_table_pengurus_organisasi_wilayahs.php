<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTablePengurusOrganisasiWilayahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('pengurus_organisasi_wilayahs', 'pengurus_organisasi_klasis');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('pengurus_organisasi_klasis', 'pengurus_organisasi_wilayahs');
    }
}
