<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Download;

class Category extends Model
{
    use HasFactory;

    public function posts(){
    	return $this ->belongsToMany(Post::class);
    }

    public function downloads(){
    	return $this ->belongsToMany(Download::class);
    }


}
