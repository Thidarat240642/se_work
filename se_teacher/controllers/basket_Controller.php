<?php class basket_Controller
{
	public function index(){
		$basketList = basket::getAll();
		require_once('views/basket/index_basket.php');
	}
}?>