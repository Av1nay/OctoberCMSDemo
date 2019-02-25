<?php namespace Abhinay\Articlelist\Components;

use Request;
use Input;
use System\Models\File as file_storage;
use Abhinay\ArticleList\Models\Article;
use Cms\Classes\ComponentBase;

class Form extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'form Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onSave(){
        $article = new Article();//article object created 
        $article->post_title = Input::post('post_title');//title posted to the table 
        $article->post_body = Input::post('post_body');//post body posted to the table 

        $image = new file_storage; // object created public storage for image 
        $image->data = Input::file('featured_image');// image saved in public storage
        $image->save(); // image saved

        $article->featured_image()->add($image);//image added to article model 
        $article->image_path =$article->featured_image->getPath();//get image path from public storage and store in image_path column of article table 
        $article->save();//path saved in article table

    }

}
