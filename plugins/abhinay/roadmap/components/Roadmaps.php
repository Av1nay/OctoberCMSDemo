<?php 

namespace Abhinay\Roadmap\Components;

use Cms\Classes\ComponentBase;

use Abhinay\Roadmap\Models\RoadMap;


class Roadmaps extends ComponentBase
{
    public $roadMaps;

    public function componentDetails()
    {
        return [
            'name'        => 'roadmaps Component',
            'description' => 'A road map description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    

    public function onRun(){
        $this->roadMaps = $this->_loadRoadMaps();
    }

    /**
     * load roadmaps from database
     */
    protected function _loadRoadMaps(){
        return Roadmap::orderBy('date', 'asc')->get();
        //return Roadmap::all();
    }
}
