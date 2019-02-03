<?php namespace Abhinay\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayPosts2 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_posts_', function($table)
        {
            $table->text('description');
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_posts_', function($table)
        {
            $table->dropColumn('description');
            $table->string('title', 191)->change();
        });
    }
}
