<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\Contracts\ProductInterface;
use Illuminate\Support\Str;
use App\Helpers\Helper;

class ProductService
{
    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->get('name', '-'));
        $data['image'] =  Helper::uploadImage($request, 'image');
        
        $this->productRepository->create($data);
    }

    public function update(Request $request, $slug)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->get('name', '-'));
        $data['image'] =  Helper::uploadImage($request, 'image');
        
        $this->productRepository->updateBySlug($slug, $data);
    }
}