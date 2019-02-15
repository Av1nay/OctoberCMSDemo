<?php namespace Abhinay\Valueanimation;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Abhinay\Valueanimation\Components\ValueanimationComponent' => 'valuecomponents'
        ];
    }

    public function registerSettings()
    {
    }
}
