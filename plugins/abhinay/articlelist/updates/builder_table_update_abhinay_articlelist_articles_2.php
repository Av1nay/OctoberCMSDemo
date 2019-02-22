<?php namespace Abhinay\ArticleList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayArticlelistArticles2 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->text('featured_images')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->dropColumn('featured_images');
        });
    }
}
