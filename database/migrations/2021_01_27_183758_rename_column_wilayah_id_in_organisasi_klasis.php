<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnWilayahIdInOrganisasiKlasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisasi_klasis', function (Blueprint $table) {
            $table->renameColumn('wilayah_id', 'klasis_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organisasi_klasis', function (Blueprint $table) {
            $table->renameColumn('klasis_id', 'wilayah_id');
        });
    }
}
