<?php

use Shop\Products\Product;
use Shop\Forms\ProductForm;
use Shop\Categories\Category;

class ProductsController extends \BaseController {

    /**
     * @var ProductForm
     */
    private $productForm;


    /**
     * Constructor
     * @param ProductForm $registrationForm
     */
    function __construct(ProductForm $productForm)
    {
        $this->productForm = $productForm;
        $this->beforeFilter('auth',
            ['except' => ['index', 'indexByCategory', 'show']]);
    }

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::orderBy('created_at', 'asc')->paginate(24);

        return View::make('products.index', compact('products'));
	}

    /**
     * @param $category
     *
     * @return Response
     */
    public function indexByCategory($category)
    {

        $categoryId = Category::whereCategory($category)->first()->id;

        $products = Product::whereCategoryId($categoryId)->paginate(24);

        return View::make('products.index', compact('products'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->productForm->validate(Input::all());

        $product = new Product();

        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->user_id = Auth::user()->id;
        $product->image_path = "images/products/" . rand(1, 10) . ".jpeg";
        $product->save();

        Flash::message("Yay! You've successfully posted a new product!");
        return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::whereId($id)->first();

        return View::make('products.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Auth::user()->username == Product::whereId($id)->first()->user()->first()->username)
        {
            Product::destroy($id);

            Flash::message('Successfully cancelled product listing');

            return Redirect::home();
        }
        Flash::warning('Naughty naughty...');

        return Redirect::home();
	}

    public function purchase($id)
    {
        $itemToPurchase = Product::whereId($id)->first()->name;

        Product::destroy($id);

        Flash::message('You just bought: ' . $itemToPurchase . '. Enjoy!');

        return Redirect::home();
    }
}