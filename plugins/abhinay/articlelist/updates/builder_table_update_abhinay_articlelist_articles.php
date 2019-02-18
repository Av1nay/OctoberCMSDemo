<?php namespace Abhinay\ArticleList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayArticlelistArticles extends Migration
{
    public function up()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->string('post_title', 255)->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->string('post_title', 191)->change();
        });
    }
}
