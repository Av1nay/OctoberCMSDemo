<?php namespace Abhinay\ArticleList;

use Backend;
use System\Classes\PluginBase;

/**
 * articleList Plugin Information File
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
            'name'        => 'articleList',
            'description' => 'articles for the page',
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
            'Abhinay\ArticleList\Components\ArticleC' => 'articlecomponent',
            'Abhinay\ArticleList\Components\Form' => 'featuredimage'
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
                'tab' => 'articleList',
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
                'label'       => 'articleList',
                'url'         => Backend::url('abhinay/articlelist/articles'),
                'icon'        => 'icon-pencil-square-o',
                'permissions' => ['abhinay.articlelist.*'],
                'order'       => 500,
            ],
        ];
    }
}
