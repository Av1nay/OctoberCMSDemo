<?php namespace Abhinay\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayBlogUsers3 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_blog_users', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_blog_users', function($table)
        {
            $table->dropColumn('deleted_at');
        });
    }
}
