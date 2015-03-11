<?php namespace Project\Managers;

class RegisterManager extends BaseManager {

	public function getRules()
	{
		return array(
			'username' => 'required|max:120',
			'email'    => 'required|email|unique:users,email',
			'password' => 'required|min:8'
		);
	}

}