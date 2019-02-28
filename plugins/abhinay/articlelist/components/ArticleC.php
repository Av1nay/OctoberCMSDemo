<?php namespace Abhinay\Articlelist\Components;
use Event;
use Request;
use Abhinay\Articlelist\Models\Article;
use Cms\Classes\ComponentBase;
use System\Models\File;

class ArticleC extends ComponentBase
{
    public $articles;
    public $properties;
    public function componentDetails()
    {
        return [
            'name'        => 'articleC',
            'description' => 'articles'
        ];
    }
    public function defineProperties()
    {
        return [
            //option for number of post to display
            'displayPosts' => [
                'title' => 'No. of posts to display',
                'description' => 'No. of posts to display',
                'default' => 5,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers are allowed'
            ],
            //option for image to display
            'featuredImage' => [
                'title' => 'Display featured image',
                'description' => 'Do you want featured image to display in the post?',
                'type' => 'dropdown',
                'default' => 'Yes'
            ],
            //image orientation dependency on featured image option 
            'imageOrientation' => [
                'title' => 'Image Orientation',
                'description' => 'position of the image in the post',
                'type' => 'dropdown',
                'default' => 'Right',
                'depends' => ['featuredImage']
                ],

            //readmore text options
            'readmoreTextOption' => [
                'title' => 'readmore options',
                'description' => 'readmore text option at the end of excerpt',
                'default' => 'readmore',
                'type' => 'string'
            ]
        ];
    }
    /**
     * load featured image options
     */
    public function getFeaturedImageOptions(){
        return [
            'yes' => 'Yes',
            'no' => 'No image'
        ];
    }
    /**
     * load switchImagePosition depending upon the option selected in fetured image option 
     * using getPopertyOptions handler
     */
    public function getImageOrientationOptions(){
        //load the featuredImage property value from the POST method
        $featuredImageOption = Request::input('featuredImage');
        if($featuredImageOption == 'yes'){
            return [
                'right' => 'Right',
                'left' => 'Left',
                'alt_right' => 'Alternate Right',
                'alt_left' => 'Alternate Left'
            ];
        }
        else{
            return ['no' => 'No image'];
        }
    }
    /**
     * load data from database after page loads
     */
    public function onRun()
    {
        $this->articles = $this->_loadArticle();

    }

    protected function _loadArticle()
    {
        /**
         * to read data from component option input
         */
        if($this->property('displayPosts') > 0){
            return Article::all()->take($this->property('displayPosts'));
        }
    }
}