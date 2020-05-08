<?php class user_Controller
{
	public function index(){
		$userList = user::getAll();
		require_once('views/user/index_user.php');
	}
	public function updateform()
	{
		$us_id=$_GET['us_id'];
		$user=user::get($us_id);
		require_once('views/user/updateform.php');
	}
	public function update()
	{
		$us_firstName=$_GET['us_firstName'];
		$us_lastName=$_GET['us_lastName'];
		$us_email=$_GET['us_email'];
		$us_phone=$_GET['us_phone'];
		$us_role=$_GET['us_role'];
		$us_img=$_GET['us_img'];
	
	user::update($us_firstName,$us_lastName,$us_email,$us_phone,$us_role,$us_img);
	user_Controller::index();
	}
	
}?>