<?php namespace Abhinay\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('abhinay_blog_posts', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_blog_posts', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
