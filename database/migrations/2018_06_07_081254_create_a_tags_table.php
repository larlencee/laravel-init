<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateATagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false)->default('');
            $table->string('meta_title')->nullable(false)->default('');
            $table->string('meta_keywords')->nullable(false)->default('');
            $table->string('meta_description')->nullable(false)->default('');
            $table->string('cover_url')->nullable(false)->default('');
            $table->string('description')->nullable(false)->default('');
            $table->integer('sort')->nullable(false)->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('a_tags');
    }
}
