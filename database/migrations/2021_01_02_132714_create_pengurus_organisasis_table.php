<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus_organisasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->constrained('users')->onDelete('cascade');
            $table->foreignId('oig')->constrained('organisasis')->onDelete('cascade');
            $table->string('jabatan', 200)->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengurus_organisasis');
    }
}
