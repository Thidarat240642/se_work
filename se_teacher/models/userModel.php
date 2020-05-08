<?php class user{
	public $us_id,$us_firstName,$us_lastName,$us_phone,$us_role,$us_email,$us_img;
	public function user($us_id,$us_firstName,$us_lastName,$us_phone,$us_role,$us_email,$us_img)
	{
		$this->us_id = $us_id;
		$this->us_firstName = $us_firstName;
        $this->us_lastName = $us_lastName;
        $this->us_phone = $us_phone;
		$this->us_role = $us_role;
        $this->us_email = $us_email;fclose
        $this->us_img = $us_img;
       
	}
	public static function getAll()
	{
		$userList=[];
		require("connection_connect.php");
		$sql="select * from user";
		$result=$conn->query($sql);
		
		while ($my_row=$result->fetch_assoc())
		{
			$us_id=$my_row['us_id'];
			$us_firstName=$my_row['us_firstName'];
            $us_lastName=$my_row['us_lastName'];
            $us_phone=$my_row['us_phone'];
			$us_role=$my_row['us_role'];
            $us_email=$my_row['us_email'];
            $us_img=$my_row['us_img'];
			$userList[]=new user($us_id,$us_firstName,$us_lastName,$us_phone,$us_role,$us_email,$us_img);
		}
		require("connection_close.php");
		return $userList;
		
		
	}
	public static function update($us_id,$us_firstName,$us_lastName,$us_phone,$us_role,$us_email,$us_img)
{	require("connection_connect.php");
	$sql = "update 'user' set 'us_id'=$us_id,'us_firstName'=$us_firstName,'us_lastName'=$us_lastName,'us_phone'=$us_phone
	,'us_role'=$us_role,'us_email'=$us_email,'us_img'=$us_img";
    $result=$conn->query($sql);
	require("connection_close.php");
	return "update success $result rows";}
}?>