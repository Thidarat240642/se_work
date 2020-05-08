<?php class basket{
	public $basket_id,$equ_id,$us_id;
	public function basket($basket_id,$equ_id,$us_id)
	{
		$this->basket_id = $basket_id;
		$this->equ_id = $equ_id;
        $this->us_id = $us_id;
       
	}
	public static function getAll()
	{
		$basketList=[];
		require("connection_connect.php");
		$sql="select * from basket";
		$result=$conn->query($sql);
		
		while ($my_row=$result->fetch_assoc())
		{
			$basket_id=$my_row['basket_id'];
			$equ_id=$my_row['equ_id'];
            $us_id=$my_row['us_id'];
			$basketList[]=new basket($basket_id,$equ_id,$us_id);
		}
		require("connection_close.php");
		return $basketList;
		
		
	}
}?>