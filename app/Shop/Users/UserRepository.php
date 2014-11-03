<?php namespace Shop\Users;

class UserRepository {

	/**
	 * Persist a user
     *
	 * @param  User   $user
	 * @return mixed
	 */
	public function save(User $user)
	{
		return $user->save();
	}

	/**
	 * Get a paginated list of all users
     *
	 * @param  integer $howMany
	 * @return mixed
	 */
	public function getPaginated($howMany = 25)
	{
		return User::orderBy('username', 'asc')->simplePaginate($howMany);
	}

	/**
	 * Fetch a user by their username.
     *
	 * @param  string $username
	 * @return mixed
	 */
	public function findByUsername($username)
	{
		return User::with('statuses')->whereUsername($username)->first();
	}

    /**
     * Find a user by their id.
     *
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function findById($id)
    {
        return User::findOrFail($id);
    }
}