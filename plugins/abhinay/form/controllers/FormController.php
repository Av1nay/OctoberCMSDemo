<?php namespace Abhinay\Form\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Form Controller Back-end Controller
 */
class FormController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Abhinay.Form', 'form', 'formcontroller');
    }
}
