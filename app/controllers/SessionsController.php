<?php

use Shop\Forms\SignInForm;

class SessionsController extends \BaseController {
    /**
     * @var SignInForm
     */
    private $signInForm;

    /**
     * @param SignInForm $signInForm
     */
    function __construct(SignInForm $signInForm)
	{
		$this->signInForm = $signInForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}
	/**
	 * Show the form for signing in.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// fetch the form input
		$input = Input::only('email', 'password', 'g-recaptcha-response');
		// validate the form
		$this->signInForm->validate($input);

        // if invalid, then go back
        // if is valid, then try to sign in

        if ( ! Auth::attempt(Input::only('email', 'password')))
        {
            Flash::message('We were unable to sign you in. Please check your credentials and try again!');

            return Redirect::back()->withInput();
        }
        Flash::message('Welcome back!');
        // redirect home
        return Redirect::intended('/');
	}

	/**
	 * Log a user out of application.
	 * @return mixed
	 */
	public function destroy()
	{
		Auth::logout();

		Flash::message('You have now been logged out.');

		return Redirect::home();
	}
}