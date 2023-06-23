<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ImageProduct;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('pages/images',compact('products'));
    }

    public function store(Request $req)
    {
        $data = $req->validate([
        'title' =>'required'
        ]);

        
        $new_product = Product::create($data);
        if ($req->has('images')) {
        	foreach ($req->file('images') as $image) {
        		$imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
        		$image->move(public_path('upload_images'),$imageName);

        		ImageProduct::create([
        			'product_id'=>$new_product->id,
        			'image'=>$imageName]);
        	}
        }
        

        return back()->with('success','Added');
    }

    public function images($id)
    {
        $products = Product::all();
        $product = Product::find($id);
        if (!$product) abort('404');
        $images = $product->images;
        return view('pages/image',compact('products','images'));
    }

}
