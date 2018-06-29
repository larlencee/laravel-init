<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('creator_id')->nullable(false)->default(0)->comment('创建人ID');
            $table->integer('page_status')->nullable(false)->default(0)->comment('状态:0草稿1回收站2发布');
            $table->string('title')->nullable(false)->default('');
            $table->string('description')->nullable(false)->default('');
            $table->string('cover_url')->nullable(false)->default('');
            $table->string('meta_keywords')->nullable(false)->default('');
            $table->string('meta_description')->nullable(false)->default('');
            $table->string('source')->nullable(false)->default('');
            $table->string('author')->nullable(false)->default('');
            $table->integer('visit_count')->nullable(false)->default(0);
            $table->integer('like_count')->nullable(false)->default(0);
            $table->integer('collect_count')->nullable(false)->default(0);
            $table->integer('sort')->nullable(false)->default(0);
            $table->timestamp('published_at')->nullable(false)->default(null);
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
        Schema::dropIfExists('pages');
    }
}
