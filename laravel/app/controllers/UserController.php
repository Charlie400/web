<?php 

use Project\Repositories\UserRepo;

class UserController extends BaseController {

	protected $userRepo;

	public function __construct(UserRepo $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	public function register()
	{
		$data = \Input::only('username', 'email', 'password');
		//$data = array('username' => 'pEPeFountI', 'email' => 'aaaass@gmail.com', 'password' => '12345678');

		if ($this->registerUser($data))	
			return \Redirect::back();
		else
		{
			$manager = $this->userRepo->getManager();
			dd($manager->errors());
		}
	}
	/*
		Para que este método funcione las keys de data 
		deben coincidir con los campos de la base de datos
	*/
	public function registerUser($data)
	{		
		$user    = $this->userRepo->getModel();		

		$manager = $this->userRepo->defaultManager($data, $user);

		return $manager->save();
	}

	public function saveInfo($sendForm = false)
	{
		echo json_encode($_POST);
	}

}