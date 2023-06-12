<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comment;
use App\Models\User;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments(){
    	return $this ->hasMany(Comment::class)->whereNull('parent_id');
    }
}
