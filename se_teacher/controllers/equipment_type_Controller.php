<?php class equipment_type
{
	public function index(){
		$equipment_typeList = equipment_type::getAll();
		require_once('views/equipment_type/index_equipment.php');
	}
	
}?>