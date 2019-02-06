<?php 
namespace Abhinay\Blog\Components;

use Cms\Classes\ComponentBase;

use Abhinay\Blog\Models\Post as postModel;

class Post extends ComponentBase
{
    public $posts;
    public function componentDetails()
    {
        return [
            'name'        => 'Post Component',
            'description' => 'blogPosts'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * 
     */
    protected function _loadPost(){
        return postModel::all();
    }

    /**
     * 
     */
    public function onRun(){
        $this->posts = $this->_loadPost();
    }
}
        

