<?php namespace Abhinay\ArticleList\Components;

use Request;
use Input;
use Abhinay\ArticleList\Models\Article;
use System\Models\File;
use Cms\Classes\ComponentBase;

class ArticleC extends ComponentBase
{
    public $articles;
    public function componentDetails()
    {
        return [
            'name'        => 'articleC',
            'description' => 'components for articles'
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
            //image position dependency on featured image option 
            'switchImagePosition' => [
                'title' => 'Image position',
                'description' => 'position of the image in the post',
                'type' => 'dropdown',
                'default' => 'Default',
                'depends' => ['featuredImage']
                ],

            //readmore text options
            'readmoreTextOption' => [
                'title' => 'readmore options',
                'description' => 'readmore text option at the end of excerpt',
                'default' => 'readmore',
                'type' => 'dropdown',
                'placeholder' => 'select option',
                'options' => [
                    'readmore' => 'readmore >>>',
                    'continue' => 'continue reading...'
                ]
            ]
        ];
    }
    /**
     * load featured image options
     */
    public function getFeaturedImageOptions(){
        return [
            'yes' => 'Yes',
            'no' => 'No'
        ];
    }

    /**
     * load switchImagePosition depending upon the option selected in fetured image option 
     * using getPopertyOptions handler
     */
    public function getSwitchImagePositionOptions(){
        $featuredImageOption = Request::input('featuredImage');//load the featuredImage property value from the POST method

        $position = [
            'yes' =>[
                'default' => 'Default',
                'switch' => 'Switch',
                'alternate' => 'Alternate'
                ],
            'no' => 'No image' 
        ];

        return $position[$featuredImageOption];
    }

    /**
     * load data from database after page loads
     */
    public function onRun()
    {
        $this->articles = $this->_loadArticle();
    }

    public function onSave(){
        $article = new Article();//article object created 
        $article->post_title = Input::post('post_title');//title posted to the table 
        $article->post_body = Input::post('post_body');//post body posted to the table 

        $image = new file_storage; // object created public storage for image 
        $image->data = Input::file('featured_image');// image saved in public storage
        dd(Input::file());
        $image->save(); // image saved

        $article->featured_image()->add($image);//image added to article model 
        $article->image_path =$article->featured_image->getPath();//get image path from public storage and store in image_path column of article table 
        dd($article);
        $article->save();//path saved in article table

    }

    /* public function onUpdate(){
        $article = new Article();//article object created 
        $article->post_title = Input::post('post_title');//title posted to the table 
        $article->post_body = Input::post('post_body');//post body posted to the table 

        $image = new file_storage; // object created public storage for image 
        $image->data = Input::file('featured_image');// image saved in public storage
        $image->save(); // image saved

        $article->featured_image()->add($image);//image added to article model 
        $article->image_path =$article->featured_image->getPath();//get image path from public storage and store in image_path column of article table 
        $article->save();//path saved in article table

    } */
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
