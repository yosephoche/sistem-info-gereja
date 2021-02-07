<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSektorIdInTblJemaat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jemaats', function (Blueprint $table) {
            $table->renameColumn('sektor_id', 'klasis_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jemaats', function (Blueprint $table) {
            $table->renameColumn('klasis_id', 'sektor_id');
        });
    }
}
