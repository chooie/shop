<?php namespace Shop\Registration\Events;

use Shop\Users\User;

class UserHasRegistered {
	
	public $user;

	function __construct(User $user) 
	{
		$this->user = $user;
	}
}