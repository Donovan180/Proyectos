<?php
function db_query($query) { // function for run the consult
    $connection = mysqli_connect("localhost","root","","mazda");
    $result = mysqli_query($connection,$query);

    return $result;
}

function delete($tblname,$field_id,$id){ // function for delete id

	$sql = "DELETE FROM ".$tblname." WHERE ".$field_id."=".$id."";
	
	return db_query($sql);
}

function select_id($tblname,$field_name,$field_id){ // 
	$sql = "SELECT * FROM ".$tblname." WHERE ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;

}
?>
