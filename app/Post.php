<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    public function getCateName($id)
    {
    	$cate = Category::find($id);
    	return $cate->name;
    }

}
