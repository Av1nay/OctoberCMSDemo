<?php namespace Abhinay\Articlelist\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * articlelist Form Widget
 */
class Articlelist extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'abhinay_articlelist_articlelist';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('articlelist');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/articlelist.css', 'Abhinay.Articlelist');
        $this->addJs('js/articlelist.js', 'Abhinay.Articlelist');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
