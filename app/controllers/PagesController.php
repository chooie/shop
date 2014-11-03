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
}