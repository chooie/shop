<?php

class PagesController extends \BaseController {

	/**
	 * Show the home page.
	 *
	 * @return Response
	 */
	public function home()
	{
        return View::make('pages.home');
	}

	public function about()
	{
		return View::make('pages.about');
	}
	public function placead()
	{
		return View::make('pages.placead');
	}
}