<?php class approved{
	public $bo_id,$bo_date,$status_approved,$basket_id;
	public function approved($bo_id,$bo_date,$status_approved,$basket_id)
	{
		$this->bo_id = $bo_id;
		$this->bo_date = $bo_date;
        $this->status_approved=$status_approved;
        $this->basket_id=$basket_id;
   
       
	}
	public static function getAll()
	{
		$bowrow_orderList=[];
		require("connection_connect.php");
		$sql="select * from borrow_order";
		$result=$conn->query($sql);
		
		while ($my_row==$result->fetch_assoc())
		{
			$bo_id_id=$my_row['bo_id'];
            $bo_date=$my_row['bo_date'];
            $status_approved=$my_row['status_approved'];
            $basket_id=$my_row['basket_id'];
           
			$borrow_orderList[]=new borrow_order($bo_id,$bo_date,$status_approved,$basket_id);
		}
		require("connection_close.php");
		return borrow_orderList;
		
		
    }
    public static function approved($bo_id,$bo_date,$status_approved,$basket_id)
    {
        require("connection_connect.php");
        $sql="UPDATE borrow_order set status_approved='$status_approved'Where bo_id='$bo_id'";
        $result=$conn->query($sql);
        require("connection_close.php");
		return "อนุมัติสำเร็จ $result ";
    }



} ?>