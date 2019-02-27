<?php namespace Abhinay\Articlelist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbhinayArticlelistArticles extends Migration
{
    public function up()
    {
        Schema::create('abhinay_articlelist_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('post_title');
            $table->string('post_body');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abhinay_articlelist_articles');
    }
}
