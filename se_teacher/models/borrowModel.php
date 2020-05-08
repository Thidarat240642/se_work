<?php class borrow{
	public $br_id,$br_date,$br_status,$br_unit,$bo_id,$approved_by;
	public function borrow($br_id,$br_date,$br_status,$br_unit,$bo_id,$approved_by)
	{
		$this->br_id = $br_id;
		$this->br_date = $br_date;
        $this->br_status= $br_unit;
        $this->bo_id=$bo_id;
        $this->approved_by=$approved_by;
       
	}
	public static function getAll()
	{
		$bowrowList=[];
		require("connection_connect.php");
		$sql="select * from borrow";
		$result=$conn->query($sql);
		
		while ($my_row=$result->fetch_assoc())
		{
			$br_id_id=$my_row['br_id'];
            $br_date=$my_row['br_date'];
            $br_status=$my_row['br_unit'];
            $bo_id=$my_row['bo_id'];
            $approved_by=$my_row['approved_by'];
			$borrowList[]=new borrow($br_id,$br_date,$br_status,$br_unit,$bo_id,$approved_by);
		}
		require("connection_close.php");
		return borrowList;
		
		
	}
}?>