<?php namespace Abhinay\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayPosts extends Migration
{
    public function up()
    {
        Schema::table('abhinay_posts_', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
            $table->string('title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_posts_', function($table)
        {
            $table->dropColumn('deleted_at');
            $table->string('title', 191)->change();
        });
    }
}
