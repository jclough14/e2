<?php

namespace App\Controllers;

//use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);
        //  $this->products = new Products($this->app->path('database/products.json'));
    }

    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
            ]);
    }

    public function show()
    {
        $id = $this->app->param('id');

        //$product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);

        if (is_null($product)) {
            return $this->app->view('products.missing', [
                'id' => $id
        ]);
        }
        # Load reviews

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        $confirmationName = $this->app->old('confirmationName');

        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName,
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:20',
        ]);
        
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');

        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];


        $this->app->db()->insert('reviews', $data);



        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }
}
