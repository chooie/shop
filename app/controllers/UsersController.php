<?php

use Shop\Users\User;

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::orderBy('username', 'asc')->paginate(24);

        return View::make('users.index', compact('users'));
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
        $user = User::whereUsername($username)->first();

        $userProducts = $user->products()->get();

        $comments = $user->comments()->get();

        return View::make('users.show', compact('user', 'userProducts', 'comments'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /user/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        Flash::message("That feature hasn't been implemented!");

        return Redirect::home();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        Flash::message("That feature hasn't been implemented!");

        return Redirect::home();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Flash::message("That feature hasn't been implemented!");

        return Redirect::home();
	}

}