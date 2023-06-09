<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageToDownload;
use App\Models\Software;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Download extends Model
{
    use HasFactory,SoftDeletes;
	protected $fillable = ['title','content'];


	public function imagetodownload(){
    	return $this ->hasOne(ImageToDownload::class);
    }

    public function software(){
    	return $this ->hasOne(Software::class);
    }

    public function categories(){
    	return $this ->belongsToMany(Category::class);
    }
}
