<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Comment;


class Comment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'content'];

    public function user(){
    	return $this ->belongsTo(User::class);
    }

    public function replies(){
    	return $this ->hasMany(Comment::class,'parent_id');
    }



}
