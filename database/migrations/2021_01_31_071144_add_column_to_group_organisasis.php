<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToGroupOrganisasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_organisasis', function (Blueprint $table) {
            $table->string('description')->nullable();
            $table->string('visi')->nullable();
            $table->string('misi')->nullable();
            $table->string('sejarah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_organisasis', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('visi');
            $table->dropColumn('misi');
            $table->dropColumn('sejarah');
        });
    }
}
