<?php namespace Abhinay\Posts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbhinayPosts2 extends Migration
{
    public function up()
    {
        Schema::create('abhinay_posts_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abhinay_posts_');
    }
}
