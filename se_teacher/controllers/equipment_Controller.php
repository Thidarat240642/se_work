<?php class equipment_Controller
{
	public function index(){
		$equipmentList = equipment::getAll();
		require_once('views/equipment/index_equipment.php');
	}
	public function search()
	{
		$key=$_GET['key'];
		$equipmentList=equipment::search($key);
		require_once('views/equipment/index_equipment.php');

	}
}?>