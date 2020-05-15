<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;

class ProductController extends Controller
{
    protected $productRepository, $categoryRepository;

    public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->getAll();
        $categories = $this->categoryRepository->getAll();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepository->getAll();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->productRepository->create($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = $this->productRepository->findBySlug($slug);
        $categories = Category::all();
        $product_images = ProductImage::whereProductId($product->id)->pluck('image');

        return view('admin.products.edit',
            compact(
                'product',
                'categories',
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $product = $this->productRepository->update($request, $slug);
        $product_id = $this->productRepository->findBySlug($slug)->id;
        ProductImage::whereProductId($product_id)->delete();

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $this->productRepository->deleteBySlug($slug);

        return redirect('/admin/products');
    }

    public function storeImage(Request $request)
    {
        $response = $this->productRepository->storeImage($request);

        return response()->json($resqonse);
    }
}
