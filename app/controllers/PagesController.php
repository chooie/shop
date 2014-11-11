<?php

use Shop\Products\Product;

class PagesController extends \BaseController {

	/**
	 * Show the home page.
	 *
	 * @return Response
	 */
	public function home()
	{
        // Get the 20 most recent products based on when they were last updated
        $recentProducts = Product::orderBy('updated_at', 'ascending')->take(20);
        return View::make('pages.home', compact('recentProducts'));
	}

	public function about()
	{
		return View::make('pages.about');
	}
}