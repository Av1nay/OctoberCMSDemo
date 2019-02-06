<?php namespace Abhinay\Roadmap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAbhinayRoadmap extends Migration
{
    public function up()
    {
        Schema::rename('abhinay_roadmap_roadmaps', 'abhinay_roadmap_');
    }
    
    public function down()
    {
        Schema::rename('abhinay_roadmap_', 'abhinay_roadmap_roadmaps');
    }
}
