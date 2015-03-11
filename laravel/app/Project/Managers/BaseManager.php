<?php namespace Project\Managers;

abstract class BaseManager {

	protected $data;
	protected $entity;
	protected $errors;

	public function __construct($data, $entity)
	{
		$this->data   = array_only($data, array_keys($this->getRules()));
		$this->entity = $entity;
	}

	abstract public function getRules();

	protected function validation($function)
	{
		$rules = $this->getRules();

		$validation = \Validator::make($this->data, $rules);

		$this->errors = $validation->messages();

		return $validation->{$function}();
	}

	public function isValid()
	{
		return $this->validation('passes');
	}

	public function isInvalid()
	{
		return $this->validation('fails');
	}

	public function save()
	{
		if ($this->isInvalid()) return false;

		$this->entity->fill($this->data);

		return $this->entity->save();
	} 

	public function errors()
	{
		return $this->errors;
	}

}