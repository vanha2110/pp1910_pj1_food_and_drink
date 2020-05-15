<?php

namespace App\Repositories;

use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;

class ProductRepository
{
    public function getAll()
    {
        return Product::get();
    }

    public function findById($id)
    {
        return Product::whereId($id)->firstOrFail();
    }

    public function findBySlug($slug)
    {
        return Product::whereSlug($slug)->firstOrFail();
    }

    public function findByCategory($slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();

        return Product::where('category_id', $category->id)->pagiante(20);
    }

    public function deleteBySlug($slug)
    {
        return Product::whereSlug($slug)->delete();
    }

    public function create($request)
    {
        return Product::create([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name', '-')),
            'image' => $request->get('image'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
        ]);
    }

    public function update($request, $slug)
    {
        return Product::whereSlug($slug)->update([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name', '-')),
            'image' => $request->get('image'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
        ]);
    }

    public function rate($request)
    {
        $user_id = Auth::user()->id;

        return Rate::updateOrCreate(
            [
                'user_id' => $user_id,
                'product_id' => $request->get('product_id')
            ],
            ['point' => $request->get('rating')]
        );
    }

    // public function updateRateAverage($product_id)
    // {
    //     $product = Product::whereId($product_id)->firstOrFail();
    //     $rate_average = $product->rates()->avg('point');
    //     $user_rate_total = $product->rates()->count();

    //     return Product::whereId($product_id)->update([
    //         'rate_average' => isset($rate_average) ? $rate_average : 0,
    //         'user_rate_total' => isset($user_rate_total) ? $user_rate_total : 0,
    //     ]);
    // }

    public function searchByName($key_word)
    {
        return Product::search($key_word)->paginate(20);
    }

    public function storeImage($request)
    {
        $image = $request->image;
        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $image_name= time().'.png';
        $path = public_path('img/product/'.$image_name);
        file_put_contents($path, $image);

        return ['image_name'=>'img/product/'.$image_name];
    }
}