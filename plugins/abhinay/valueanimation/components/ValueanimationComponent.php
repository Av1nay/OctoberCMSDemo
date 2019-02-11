<?php namespace Abhinay\Valueanimation\Components;

use Cms\Classes\ComponentBase;

class ValueanimationComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'valueanimationComponent Component',
            'description' => 'this is the value animation component'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
