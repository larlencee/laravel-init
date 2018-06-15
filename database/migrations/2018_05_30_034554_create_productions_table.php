<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('admin_id')->nullable(false)->default(0);
            $table->tinyInteger('object_id')->nullable(false)->default(0);
            $table->tinyInteger('scence_id')->nullable(false)->default(0);
            $table->tinyInteger('platform_type')->nullable(false)->default(0)->comment('【平台类型】 1淘宝 2天猫');
            $table->string('platform_url')->nullable(false)->default(0)->comment('【购买链接】');
            $table->tinyInteger('who_id')->nullable(false)->default(0);
            $table->integer('production_status')->nullable(false)->default(0)->comment('状态:0未发布1草稿2已发布');
            $table->string('title')->nullable(false)->default('');
            $table->string('description')->nullable(false)->default('');
            $table->decimal('price',8 ,2)->nullable(false)->default(0);
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
        Schema::dropIfExists('productions');
    }
}
