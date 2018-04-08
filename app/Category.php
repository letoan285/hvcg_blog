<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getStatus()
    {
    	if($this->status == 1){
    		return 'Hiển thị';
    	} 
    	return 'Không hiển thị';
    }

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
    public function getParentName()
    {
    	$parent = self::find($this->parent_id);
    	if($parent) {
    		return $parent->name;
    	} else {
    		return "--";
    	}
    }
}
