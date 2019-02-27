<?php namespace Abhinay\Articlelist\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::create('abhinay_articlelist_articles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('abhinay_articlelist_articles');
    }
}
