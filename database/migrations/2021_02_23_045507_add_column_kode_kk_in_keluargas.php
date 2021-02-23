<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnKodeKkInKeluargas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('keluargas', function (Blueprint $table) {
            $table->string('kode_kk', 100)->nullable();
            $table->foreignId('kepala_keluarga')->nullable()->constrained('user_profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keluargas', function (Blueprint $table) {
            $table->dropColumn('kode_kk');
            $table->dropForeign('keluargas_kepala_keluarga_foreign');
        });
    }
}
