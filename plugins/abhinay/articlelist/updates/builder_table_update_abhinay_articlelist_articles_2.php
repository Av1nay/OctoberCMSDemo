<?php namespace Abhinay\Articlelist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayArticlelistArticles2 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->string('post_title', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->text('post_title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
