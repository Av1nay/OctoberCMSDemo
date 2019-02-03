<?php namespace Abhinay\Roadmap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAbhinayRoadmap extends Migration
{
    public function up()
    {
        Schema::create('abhinay_roadmap_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->integer('month');
            $table->integer('year');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('abhinay_roadmap_');
    }
}
