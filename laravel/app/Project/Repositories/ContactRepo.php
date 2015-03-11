<?php namespace Project\Repositories;

use Project\Entities\Contact;
use Project\Managers\ContactManager;

class ContactRepo extends BaseRepo {

	public function getModel()
	{
		return new Contact();
	}

	public function defaultManager($data, $entity)
	{
		$this->manager = new ContactManager($data, $entity);
		return $this->manager;
	}

	public function getManager()
	{
		return $this->manager;
	}

	public function setManager($manager)
	{
		$this->manager = $manager;
	}

}