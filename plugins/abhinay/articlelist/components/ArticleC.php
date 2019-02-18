<?php namespace Abhinay\ArticleList\Components;

use Cms\Classes\ComponentBase;

class ArticleC extends ComponentBase
{
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
                'placeholder' => 'Select option',
                'default' => 'Yes',
                'options' => ['yes' => 'Yes', 'no' => 'No']
            ],
            //image position dependency on featured image option 
            'switchImagePositon' => [
                'depends' => 'featuredImage',
                'title' => 'Image position',
                'description' => 'position of the image in the post',
                'type' => 'dropdown',
                'placeholder' => 'Choose position',
                'default' => 'Default',
                'options' => [
                    'default' => 'Default',
                    'switch' => 'Switch',
                    'alternate' => 'Alternate'
                    ]
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
     * load switchImagePosition depending upon the option selected in fetured image option 
     * using getPopertyOptions handler
     */
    public function getSwitchImagePosition(){
        $featuredImageOption = Request::input('featuredImage');//load the featuredImage property value from the POST method

        $position = [

        ];


    }
}
