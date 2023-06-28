<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SitemapController extends Controller
{
    // Sitemap index
	public function index () {
		$post = Post::latest()->first();
		return response()->view("sitemaps.index", compact('post'))->header('Content-Type', 'text/xml');
		}

	// Sitemap posts	
    public function posts()
    {
    	$posts = Post::latest()->get();
    	return response()->view('sitemaps.posts', compact('posts'))->header('Content-Type', 'text/xml');
    }

    // Sitemap pages	
    public function pages()
    {
    	return response()->view('sitemaps.pages')->header('Content-Type', 'text/xml');
    }
}
