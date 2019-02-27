<?php namespace Abhinay\Articlelist\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('abhinay_articlelist_articles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('post_title');
            $table->string('post_body');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('abhinay_articlelist_articles');
    }
}
