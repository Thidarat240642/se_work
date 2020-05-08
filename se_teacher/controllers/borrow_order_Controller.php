<?php class borrow_order_Controller
{
	public function index(){
		$borrow_orderList = borrow_order::getAll();
		require_once('views/borrow_order/index_borrow_order.php');
	}
	public function deleteconfirm()
	{
		$bo_id=$_GET['bo_id'];
		$borrow_order=borrow_order::get($bo_id);
	}
	public function delete()
	{
		$bo_id=$_GET['bo_id'];
		borrow_order::delete($bo_id);
		borrow_order_Controller::index();
	}
}?>