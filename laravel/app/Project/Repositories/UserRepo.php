<?php namespace Project\Repositories;

use Project\Entities\User;
use Project\Managers\RegisterManager;

class UserRepo extends BaseRepo {

	public function getModel()
	{
		return new User();
	}

	public function defaultManager($data, $entity)
	{
		$this->manager = new RegisterManager($data, $entity);
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