<?php class equipment{
public $equ_id,$equ_img,$equ_name,$equ_serialnumber,$equ_price,$equ_details,$equ_buy,$type_id,$type_name;


public function equipment($equ_id,$equ_img,$equ_name,$equ_serialnumber,$equ_price,$equ_details,
$equ_buy,$type_id,$type_name)
{
	
	  $this->equ_id = $equ_id;
    $this->equ_img = $equ_img;
    $this->equ_name = $equ_name;
    $this->equ_serialnumber =$equ_serialnumber;
    $this->equ_price = $equ_price;
    $this->equ_details = $equ_details;
    $this->equ_buy= $equ_buy;
    $this->type_id = $type_id;
    $this->type_name = $type_name;
	
}
public static function get($type_id)
{
  require("connection_connect.php");
  $sql = "select * from equipment,equipment_type where equipment.type_id= equipment_type.type_id"
  $result=$conn->query($sql);
  $my_row = =$result->fetch_assoc();
  $equ_id=$my_row['equ_id'];
  $equ_img=$my_row['equ_img'];
  $equ_name=$my_row['equ_name'];
  $equ_serialnumber=$my_row['equ_serialnumber'];
  $equ_price=$my_row['equ_price'];
  $equ_details=$my_row['equ_details'];
  $equ_buy=$my_row['equ_buy'];
  $type_id=$my_row['type_id'];
  $type_name=$my_row['type_name'];
  
  require("connection_close.php");
  return new equipment($equ_id,$equ_img,$equ_name,$equ_serialnumber,$equ_price,$equ_details,$equ_buy,$type_id,$type_name);
  
}
public static function getAll()
{
  $equipmentList=[];
  require("connection_connect.php");
  $sql = "SELECT equipment.equ_img,equipment.equ_name,equipment.equ_serialnumber,
  equipment.equ_details,equipment_type.type_name FROM equipment,equipment_type WHERE
  equipment.type_id=equipment_type.type_id";
  $result=$conn->query($sql);
  while($my_row = $result->fetch_assoc())
{
  $equ_id=$my_row['equ_id'];
  $equ_img=$my_row['equ_img'];
  $equ_name=$my_row['equ_name'];
  $equ_serialnumber=$my_row['equ_serialnumber'];
  $equ_price=$my_row['equ_price'];
  $equ_details=$my_row['equ_details'];
  $equ_buy=$my_row['equ_buy'];
  $type_id=$my_row['type_id'];
  $type_name=$my_row['type_name'];
  $equipmentList[]= new equipment($equ_id,$equ_img,$equ_name,$equ_serialnumber,
  $equ_price,$equ_details,$equ_buy,$type_id,$type_name);
}
require("connection_close.php");
return $equipmentList;
}

public static function search($key)
{	require("connection_connect.php");
    $sql = "select *from equipment,equipment_type
    where (equ_id like'%$key%' or equ_name like'%$key%' or equ_serialnumber  like'%$key%' or 
    type_id like'%$key%' or type_name like'%$key%')and type_id=type_id";
    $result=$conn->query($sql);
	while($my_row = $result->fetch_assoc())
	{
    $equ_id=$my_row['equ_id'];
    $equ_img=$my_row['equ_img'];
    $equ_name=$my_row['equ_name'];
    $equ_serialnumber=$my_row['equ_serialnumber'];
    $equ_price=$my_row['equ_price'];
    $equ_details=$my_row['equ_details'];
    $equ_buy=$my_row['equ_buy'];
    $type_id=$my_row['type_id'];
    $type_name=$my_row['type_name'];
    $equipmentList[]= new equipment($equ_id,$equ_img,$equ_name,$equ_serialnumber,
    $equ_price,$equ_details,$equ_buy,$type_id,$type_name);
	}
		require("connection_close.php");
		return $equipmentList;
}
}
?>