<?php

use Shop\Forms\RegistrationForm;
use Shop\Registration\RegisterUserCommand;

class RegistrationController extends \BaseController {

    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    /**
     * Constructor
     * @param RegistrationForm $registrationForm
     */
    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
    }

    /**
     * Show a form to register the user
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration.create');
    }


    /**
     * Create new Shop user
     */
    public function store()
    {
        $this->registrationForm->validate(Input::all());

        $user = $this->execute(RegisterUserCommand::class);

        // determines whether the user shall remain logged in
        $rememberMe = Input::only('remember_me');

        Auth::login($user, $rememberMe);

        Flash::message('Glad to have you as a new member!');

        return Redirect::home();
    }
}