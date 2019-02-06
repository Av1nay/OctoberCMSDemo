<?php namespace Abhinay\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * Blog Plugin Information File
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
            'name'        => 'Blog',
            'description' => 'the blog posts',
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
        return [];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        return [];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Abhinay\Blog\Components\post' => 'blogPosts',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'abhinay.blog.some_permission' => [
                'tab' => 'Blog',
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
            'blog' => [
                'label'       => 'Blog',
                'url'         => Backend::url('abhinay/blog/posts'),
                'icon'        => 'icon-leaf',
                'permissions' => ['abhinay.blog.*'],
                'order'       => 500,
            ],
        ];
    }
}
