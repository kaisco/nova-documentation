<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documentation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0)->comment('父级id');
            $table->string('title', 100)->comment('标题');
            $table->longText('content')->comment('内容');
            $table->integer('order')->default(0)->comment('排序');
            $table->boolean('on')->default(false)->comment('是否显示');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE documentations AUTO_INCREMENT=100000");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentation');
    }
}
