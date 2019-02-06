<?php namespace Abhinay\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayBlogUsers extends Migration
{
    public function up()
    {
        Schema::table('abhinay_blog_users', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_blog_users', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
}
