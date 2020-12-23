<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama', 50);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita'])->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
            $table->string('alamat', 100)->nullable()->default('');
            $table->string('status', 30)->nullable()->default('');
            $table->boolean('is_baptis');
            $table->boolean('is_sidi');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
