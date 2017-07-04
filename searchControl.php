
<?php
require ("dao/cnsDao.php");
header('Content-Type: application/json');
if(isset($_POST["searchValue"]) && !empty($_POST["searchValue"])){
	$searchResult = trim(htmlentities($_POST["searchValue"]));
	switch ($searchResult) {
		case 1:
			$clients = cnsDao::getClientsList();
			$json = json_encode($clients);
			echo $json;
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
	}

}else {
	echo "oye";
}

?>
