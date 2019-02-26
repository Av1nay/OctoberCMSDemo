<?php namespace Abhinay\Articlelist\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayArticlelistArticles extends Migration
{
    public function up()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_articlelist_articles', function($table)
        {
        });
    }
}
