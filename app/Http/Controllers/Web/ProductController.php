<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Repositories\Contracts\ProductInterface;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;
    protected $productService;

    public function __construct(
        ProductInterface $productRepository, 
        ProductService $productService)
    {
        $this->productRepository = $productRepository;
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);
        $categories = Category::all();

        return view('web.products.index', compact('products', 'categories'));
    }

    public function filterByCategory(Request $request, $id)
    {
        $products = Product::where('category_id', $id)->paginate(9);
        $categories = Category::all();

        return view('web.products.index', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $product = $this->productRepository->findBySlug($slug);
        return view('web.products.show', compact('product'));
    }
}
