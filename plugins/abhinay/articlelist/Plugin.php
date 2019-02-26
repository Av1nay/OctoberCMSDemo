<?php namespace Abhinay\Articlelist;

use Backend;
use System\Classes\PluginBase;

/**
 * articlelist Plugin Information File
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
            'name'        => 'articlelist',
            'description' => 'articles for page',
            'author'      => 'Abhinay',
            'icon'        => 'pencil-square-o'
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
        return [
            'Abhinay\Articlelist\Components\ArticleC' => 'articlecomponent',
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
            'abhinay.articlelist.some_permission' => [
                'tab' => 'articlelist',
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

        return [
            'articlelist' => [
                'label'       => 'articlelist',
                'url'         => Backend::url('abhinay/articlelist/article'),
                'icon'        => 'icon-pencil-square-o',
                'permissions' => ['abhinay.articlelist.*'],
                'order'       => 500,
            ],
        ];
    }
}
