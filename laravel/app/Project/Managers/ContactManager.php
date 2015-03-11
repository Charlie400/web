<?php namespace Project\Managers;

class ContactManager extends BaseManager {

	public function getRules()
	{
		return array(
			'firstname' => 'required|max:255',
			'lastname'  => 'required|max:255',
			'email'     => 'required|email|unique:users,email|max:255',
			'message'   => 'required|max:4000',
			'noticeme'  => ''
		);
	}

}