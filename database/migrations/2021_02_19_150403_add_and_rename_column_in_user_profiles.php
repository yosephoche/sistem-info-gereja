<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAndRenameColumnInUserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->renameColumn('status', 'status_perkawinan');
            $table->string('dokumen_nikah_gereja', 300);
            $table->string('dokumen_nikah_bs', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->renameColumn('status_perkawinan', 'status');
            $table->dropColumn('dokumen_nikah_gereja');
            $table->dropColumn('dokumen_nikah_bs');
        });
    }
}
