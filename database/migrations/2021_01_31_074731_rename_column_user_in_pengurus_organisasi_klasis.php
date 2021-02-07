<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnUserInPengurusOrganisasiKlasis  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengurus_organisasi_klasis', function (Blueprint $table) {

            $table->dropForeign('pengurus_organisasi_wilayahs_user_foreign');
            $table->renameColumn('user', 'user_id');
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
            $table->renameColumn('user_id', 'user');
        });
    }
}
