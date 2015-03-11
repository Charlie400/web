<?php namespace Project\Managers;

class RequestManager extends BaseManager {

	public function getRules()
	{
		return array(
			'ip'   	   => 'required|ip|max:39',
			'slug'     => 'required|max:40'
		);
	}

}