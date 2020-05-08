<?php
$controllers=array('pages'=>['home','error'],'basket'=>['index','addbasket','delete','deleteconfirm'],
'borrow'=>['index','newborrow','updateform','update'],'borrow_order'=>['index','newborrow_order','updateform','update','addborrow_order','delete','deleteconfirm'],
'equipment'=>['index','search'],'equipment_type'=>['index'],'user'=>['index','updateform','update']);

function call($controller,$action){
	require_once("controllers/".$controller."_Controller.php");
	switch($controller)
	{
		case "page"		    : 	$controller = new page_Controller();
					  			break;
        case "basket"	    :   require_once("models/basketModel.php");
                                require_once("models/equipmentModel.php");
                                require_once("models/userModel.php");
								$controller = new basket_Controller();
								break;
        case "borrow"       :	require_once("models/borrowModel.php");
                                require_once("models/borrow_orderModel.php");
								$controller = new borrow_Controller();
								break;
		case "borrow_order"	:	require_once("models/ReserveModel.php");
                                require_once("models/basketModel.php");
								$controller = new borrow_orderController();
								break;
        case "equipment"	:	require_once("models/equipmentModel.php");
                                #require_once("models/equipment_typeModel.php");
								$controller = new equipment_Controller();
								break;
		case "equipment_type" :	require_once("models/equipment_typeModel.php");
								$controller = new equipment_type_Controller();
								break;
		case "user"        	:	require_once("models/userModel.php");
								$controller = new user_Controller();
								break;
		
		
								
	}
	$controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
	if(in_array($action,$controllers[$controller]))
	{
		call($controller,$action);
	}
	else
		call('pages','error');
}
else{
	call('pages','error');	
}
?>