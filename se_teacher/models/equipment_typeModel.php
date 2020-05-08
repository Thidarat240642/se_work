<?php class equipment_type{
public $type_id,$type_name;
public function equipment_type($type_id,$type_name){
	
	$this->type_id = $type_id;
  $this->type_name = $type_name;
	
}

public static function getAll()
{
  $equipment_typeList=[];
  require("connection_connect.php");
  $sql = "SELECT * FROM equipment_type";
  $result=$conn->query($sql);
  while($my_row == $result->fetch_assoc())
{
  $type_id=$my_row['type_id'];
  $type_name=$my_row['type_name'];
  $equipment_typeList[]= new equipment_type($type_id,$type_name);
}
require("connection_close.php");
return $equipment_typeList;
}
}
?>
