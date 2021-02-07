<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGroupToOrganisasiKlasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisasi_klasis', function (Blueprint $table) {
            $table->foreignId('group_id')->nullable()->constrained('group_organisasis');
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
            $table->dropForeign('organisasi_klasis_group_id_foreign');
        });
    }
}
