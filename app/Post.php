<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    public function getCateName($id)
    {
    	$cate = Category::find($id);
    	if($cate){
    		
    	return $cate->name;
    	}
    }
    public function comments()
    {
    	return $this->hasMany("App\Comment");
    }
    public function tags()
    {
    	return $this->belongsToMany("App\Tag", "term_post_tag");
    }
    public function getStatus()
    {
        if($this->status == 1)
        {
            return 'Hiển thi';
        } 
        return 'Không hiển thị';
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
