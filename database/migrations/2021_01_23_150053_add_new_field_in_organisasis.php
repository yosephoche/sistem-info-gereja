<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldInOrganisasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisasis', function (Blueprint $table) {
            $table->foreignId('jemaat_id')->nullable()->constrained('jemaats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organisasis', function (Blueprint $table) {
            $table->dropForeign('user_profiles_jemaat_id_foreign');
        });
    }
}
