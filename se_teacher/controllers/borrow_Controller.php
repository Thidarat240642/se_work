<?php class borrow_Controller
{
	public function index(){
		$borrowList = borrow::getAll();
		require_once('views/borrow/index_borrow.php');
	}
}?>