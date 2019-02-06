<?php namespace Abhinay\Roadmap;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Abhinay\Roadmap\Components\Roadmaps' => 'roadMaps'
        ];
    }

    public function registerSettings()
    {
        return [];
    }
}
