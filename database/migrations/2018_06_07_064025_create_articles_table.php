<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_status')->nullable(false)->default(0)->comment('状态:0未发布1草稿2已发布');
            $table->string('title')->nullable(false)->default('');
            $table->string('cover_url')->nullable(false)->default('');
            $table->string('description')->nullable(false)->default('');
            $table->integer('category_id')->nullable(false)->default(0);
            $table->integer('visit_count')->nullable(false)->default(0);
            $table->integer('like_count')->nullable(false)->default(0);
            $table->integer('collect_count')->nullable(false)->default(0);
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
        Schema::dropIfExists('articles');
    }
}
