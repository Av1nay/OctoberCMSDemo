<?php namespace Abhinay\Form;

use Backend;
use System\Classes\PluginBase;

/**
 * form Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'form',
            'description' => 'No description provided yet...',
            'author'      => 'Abhinay',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Abhinay\Form\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'abhinay.form.some_permission' => [
                'tab' => 'form',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'form' => [
                'label'       => 'form',
                'url'         => Backend::url('abhinay/form/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['abhinay.form.*'],
                'order'       => 500,
            ],
        ];
    }
}
