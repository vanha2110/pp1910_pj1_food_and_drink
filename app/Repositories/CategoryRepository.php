<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Config;

class CategoryRepository
{
    public function getAll()
    {
        return Category::get();
    }

    public function find($id)
    {
        return Category::whereId($id)->firstOrFail();
    }

    public function create($request)
    {
        return Category::create([
            'name' => $request->get('name'),
        ]);
    }

    public function update($request, $id)
    {
        return Category::whereId($id)->update([
            'name' => $request->get('name'),
        ]);
    }

    public function delete($id)
    {
        return Category::whereId($id)->delete();
    }
}