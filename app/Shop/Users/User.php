<?php
namespace Shop\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent, Hash;
use Laracasts\Commander\Events\EventGenerator;
// use Shop\Registration\Events\UserHasRegistered;
use Laracasts\Presenter\PresentableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator, PresentableTrait;

	/**
	 * Which fields may be mass-assigned.
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Path to the presenter for a user.
     *
	 * @var string
	 */
	protected $presenter = 'Shop\Users\UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * Passwords must always be hashed.
     *
	 * @param $password
	 */
	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

	/**
	 * Register a new user.
     *
	 * @param $username
	 * @param $email
	 * @param $password
	 * @return static
	 */
	public static function register($username, $email, $password)
	{
		$user = new static(compact('username', 'email', 'password'));

		// raise an event not necessary yet
		// $user->raise(new UserHasRegistered($user));

		return $user;
	}

	/**
	 * Determine if the given user is the same as the current
	 * one.
     *
	 * @param  $user
	 * @return boolean
	 */
	public function is($user)
	{
		if (is_null($user)) return false;

		return $this->username == $user->username;
	}

    public function products()
    {
        return $this->hasMany('Shop\Products\Product');
    }

    public function comments()
    {
        return $this->hasMany('Shop\Comments\UserComment');
    }

}
