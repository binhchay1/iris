<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\BlogRepository;
use Illuminate\Support\Str as Str;

class HomeController extends Controller
{
    private ProductRepository $productRepository;
    private BlogRepository $blogRepository;

    public function __construct(
        ProductRepository $productRepository,
        BlogRepository $blogRepository
    ) {
        $this->productRepository = $productRepository;
        $this->blogRepository = $blogRepository;
    }

    public function viewHome()
    {
        $products = $this->productRepository->getListProduct();
        $blogs = $this->blogRepository->getListBlog();

        foreach($blogs as $blog) {
            $blog->description = Str::limit($blog->description, 35, $end='...'); 
        }

        return view('page.home', compact('products', 'blogs'));
    }

    public function detailProduct($name)
    {
        $product = $this->productRepository->getProductByName($name);
        $recentProduct = $this->productRepository->getListProductExpectName($name);
        $recentBlog = $this->blogRepository->getListBlog();

        return view('page.product-detail', compact('product', 'recentProduct', 'recentBlog'));
    }

    public function detailBlog($name)
    {
        $blog = $this->blogRepository->getBlogByTitle($name);
        $recentBlog = $this->blogRepository->getListBlogExpectTitle($name);

        return view('page.blog-detail', compact('blog', 'recentBlog'));
    }

    public function listProduct()
    {
        $products = $this->productRepository->getListProduct();
        return view('page.home', compact('products'));
    }

    public function listBlog()
    {
        $blogs = $this->blogRepository->getListBlog();
        return view('page.home', compact('blogs'));
    }
}
