<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content')->nullable();
            $table->string('meta_title');
            $table->string('slug');
            $table->string('meta_description');
            $table->string('image');
            $table->foreignId('category')->constrained('categories')->onDelete('cascade');
            $table->foreignId('author')->constrained('users')->onDelete('cascade');
            $table->boolean('is_published')->default(false);
            $table->dateTime('published_at')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
