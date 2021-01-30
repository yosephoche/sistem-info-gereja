<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGroupToOrganisasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organisasis', function (Blueprint $table) {
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
        Schema::table('organisasis', function (Blueprint $table) {
            $table->dropForeign('organisasis_group_id_foreign');
        });
    }
}
