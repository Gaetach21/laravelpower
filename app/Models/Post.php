<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;
	protected $fillable = ['title','content'];


	public function image(){
    	return $this ->hasOne(Image::class);
    }

    public function categories(){
    	return $this ->belongsToMany(Category::class);
    }
}
