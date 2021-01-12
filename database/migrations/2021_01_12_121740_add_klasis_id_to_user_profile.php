<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKlasisIdToUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->foreignId('klasis_id')->nullable()->constrained('klasis');
            $table->foreignId('wilayah_id')->nullable()->constrained('wilayahs');
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
            $table->dropForeign('user_profiles_klasis_id_foreign');
            $table->dropForeign('user_profiles_wilayah_id_foreign');
        });
    }
}
