<?php namespace Abhinay\Valueanimation\Components;

use Cms\Classes\ComponentBase;

use Abhinay\Valueanimation\Models\Valuemodel;

class ValueanimationComponent extends ComponentBase
{
    public $title;

    public function componentDetails()
    {
        return [
            'name'        => 'valueanimationComponent',
            'description' => 'this is the value animation component'
        ];
    }

    public function defineProperties()
    {
        return [
            // diplaying option for number of title

            'displayTitle' => [
                'title' => 'Number of titles',
                'description' => 'How many title to display?',
                'default' => 0,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers are allowed'
            ],

            // sorting title
            'sortTitle' => [
                'title' => 'Sort Order',
                'type' => 'dropdown',
                'placeholder' => 'Select Order',
                'default' => 'asc'
                
            ],
        ];
    }

    /**
     * get sorting options
     */
    public function getSortTitleOptions()
    {
        return [
            'asc' => 'Ascending',
            'desc' => 'Descending'
        ];
    }
    /**
     * passing data from database
     */
    public function onRun()
    {
        $this->title = $this->_loadTitle();
    }

    protected function _loadTitle()
    {
        /**
         * to read data from component option input
         */
        $query = Valuemodel::all();
        switch($this->property('sortTitle')){
            case ('asc'):
                $query = $query->sortBy('title');
                break;
            case ('desc'):
                $query = $query->sortByDesc('title');
                break;
        }
            


        /* if($this->property('sortTitle') == 'asc'){
            $query = $query->sortBy('title');
        }
        if($this->property('sortTitle') == 'desc'){
            $query = $query->sortByDesc('title');
        } */

        /**
         * if nuber of title to display is 0 then display all
         */
        if($this->property('displayTitle') > 0){
            $query = $query->take($this->property('displayTitle'));
        }
        return $query;
    }


}
