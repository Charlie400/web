<?php

use Project\Repositories\ContactRepo;
use Project\Repositories\RequestRepo;

class HomeController extends BaseController {

	protected $contactRepo;
	protected $requestRepo;

	public function __construct(ContactRepo $contactRepo, RequestRepo $requestRepo)
	{
		$this->contactRepo = $contactRepo;
		$this->requestRepo = $requestRepo;
	}

	public function index()
	{
		return View::make('home');
	}

	public function index2()
	{
		return View::make('prueba');
	}

	public function contact()
	{
		$data = \Input::only('firstname', 'lastname', 'email', 'message', 'noticeme');
		
		dd($this->contactRepo->createNewRecord($data));
	}	
}
