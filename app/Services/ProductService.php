<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ProductInterface;
use Illuminate\Support\Str;

class ProductService
{
    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(Request $request)
    {
        $request->all();
        $data = $request->all();
        $data['slug'] = Str::slug($request->get('name', '-'));

        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('image')->storeAs('public/img', $fileNameToStore);
            
            $data['image'] = $fileNameToStore;
        }
        
        $this->productRepository->create($data);
    }

    public function update(Request $request, $slug)
    {
        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('image')->storeAs('public/img', $fileNameToStore);
            
        }

        $data = [
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name', '-')),
            'image' => $fileNameToStore,
            'price' => $request->get('price'),
            'description' => $request->get('description'),
        ];
        
        $this->productRepository->updateBySlug($slug, $data);
        $product_id = $this->productRepository->findBySlug($slug)->id;
        ProductImage::whereProductId($product_id)->delete();
    }
}