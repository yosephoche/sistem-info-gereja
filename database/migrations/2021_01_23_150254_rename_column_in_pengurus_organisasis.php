<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnInPengurusOrganisasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengurus_organisasis', function (Blueprint $table) {
            $table->renameColumn('oig', 'organisasi_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengurus_organisasis', function (Blueprint $table) {
            $table->renameColumn('organisasi_id', 'oig');
        });
    }
}
