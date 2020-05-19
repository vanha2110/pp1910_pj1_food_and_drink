<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Repositories\Contracts\CategoryInterface;
use App\Repositories\Contracts\ProductInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productRepository, $categoryRepository;

    public function __construct(ProductInterface $productRepository, CategoryInterface $categoryRepository)
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
        $data = [
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name', '-')),
            'image' => $request->get('image'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
        ];

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        

        $product = $this->productRepository->create($data);

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
        $data = [
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name', '-')),
            'image' => $request->get('image'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
        ];
        $product = $this->productRepository->updateBySlug($slug, $data);
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

        return redirect()->route('admin.products.index');
    }

    // public function storeImage(Request $request)
    // {
    //     $response = $this->productRepository->storeImage($request);

    //     return response()->json($resqonse);
    // }
}
