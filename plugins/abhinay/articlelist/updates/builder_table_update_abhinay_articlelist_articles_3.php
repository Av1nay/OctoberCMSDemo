<?php namespace Abhinay\ArticleList\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayArticlelistArticles3 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->renameColumn('featured_images', 'featured_image');
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->renameColumn('featured_image', 'featured_images');
        });
    }
}
