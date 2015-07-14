<?php
include 'db.php';
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');
$message="emptymessage";
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
				//insert into database
							$title = $_FILES['upl']['name'];
							$order = 0;
							$statement = "INSERT INTO `oeuvres` (`title`, `order`) VALUES ('" . $title . "', '" . $order . "');";
							if(mysqli_query($conn,$statement)===true){
								$message.="Nouvelle entrée avec succès !\n";
								exit;
							}
							else{
								echo(mysqli_error($conn));
								exit;
							}


		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;

?>
