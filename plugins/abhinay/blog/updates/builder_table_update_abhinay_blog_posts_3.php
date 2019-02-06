<?php namespace Abhinay\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayBlogPosts3 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_blog_posts', function($table)
        {
            $table->integer('user_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_blog_posts', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
