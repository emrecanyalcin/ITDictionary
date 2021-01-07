<?php 

require_once 'config.php';

$kelime = mb_strtolower($_GET['yazi']);
$query = mysqli_query($connect, "SELECT * FROM `words` WHERE wordName ='$kelime'");
if(!(empty($kelime)) && $query==true){
	
	$row = mysqli_fetch_array($query);
	if(!(empty($row['wordMean']))){
		echo $row['wordMean'];
	}else{
		echo "The meaning of the word was not found.";
	}

}
	
else
	echo "The meaning of the word was not found.";
 ?>


