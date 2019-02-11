<?php namespace Abhinay\Roadmap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayRoadmap2 extends Migration
{
    public function up()
    {
        Schema::table('abhinay_roadmap_', function($table)
        {
            $table->text('month')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('abhinay_roadmap_', function($table)
        {
            $table->integer('month')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
