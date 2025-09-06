<?php
namespace Admin\Controller;

class MarketController extends AdminController
{
	private $Model;

	public function __construct()
	{
		parent::__construct();


	}

	public function index(){
	
		$this->display();
	}

	public function edit(){

		$this->display();
	}


}
?>