<?php namespace Project\Repositories;

abstract class BaseRepo {

	protected $manager;

	public function __construct()
	{
		$this->model = $this->getModel();
	}

	abstract public function getModel();
	abstract public function defaultManager($data, $entity);
	abstract public function getManager();
	abstract public function setManager($manager);

	public function find($id)
	{
		$this->model->find();
	}

	public function all()
	{
		$this->model->all();
	}

	public function createNewRecord($data, $manager = false)
	{
		if ( ! $manager) $manager = $this->defaultManager($data, $this->model);

		if ($manager->save()) return true;

		return $manager->errors();		
	}

}