<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnOrganisasiWilayahIdInPengurusOrganisasiKlasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengurus_organisasi_klasis', function (Blueprint $table) {
            $table->renameColumn('organisasi_wilayah_id', 'organisasi_klasis_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengurus_organisasi_klasis', function (Blueprint $table) {
            $table->renameColumn('organisasi_klasis_id', 'organisasi_wilayah_id');
        });
    }
}
