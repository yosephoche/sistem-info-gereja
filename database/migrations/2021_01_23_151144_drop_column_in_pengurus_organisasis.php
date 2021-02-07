<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnInPengurusOrganisasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengurus_organisasis', function (Blueprint $table) {
            $table->dropForeign('pengurus_organisasis_jemaat_id_foreign');
            $table->dropColumn('jemaat_id');

            $table->dropForeign('pengurus_organisasis_klasis_id_foreign');
            $table->dropColumn('klasis_id');

            $table->dropForeign('pengurus_organisasis_wilayah_id_foreign');
            $table->dropColumn('wilayah_id');
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
            $table->foreignId('jemaat_id')->nullable()->constrained('jemaats');
            $table->foreignId('klasis_id')->nullable()->constrained('klasis');
            $table->foreignId('wilayah_id')->nullable()->constrained('wilayahs');
        });
    }
}
