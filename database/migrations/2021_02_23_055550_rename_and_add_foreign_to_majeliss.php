<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAndAddForeignToMajeliss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('majeliss', function (Blueprint $table) {
            $table->dropColumn('periode');
            $table->foreignId('periode_id')->nullable()->constrained('periode_majelis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('majeliss', function (Blueprint $table) {
            $table->string('periode', 100)->nullable();
            $table->dropForeign('periode_id_periode_majelis_foreign');
        });
    }
}
