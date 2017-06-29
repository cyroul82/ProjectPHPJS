<?php 
require ("dao/cnsDao.php");

if(isset($_GET["searchValue"]) && !empty($_GET["searchValue"])){
	$searchResult = trim(htmlentities($_GET["searchValue"]));
	$clients = cnsDao::AllClientList();
	$d = array("1"=>"test");

			$json = json_encode($d)
			echo $json;
	/*switch ($searchResult) {
		case 1:
			
			break;
		case 2:
			
			break;
		case 3:
			
			break;
		case 4:
			
			break;
		case 5:
			
			break;
		
		default:
			break;
	}*/

}

?>