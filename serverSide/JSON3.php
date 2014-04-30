<?
    include("connect.php");
    header('Content-Type: application/json');

    $query = "SELECT * FROM $tableName ORDER BY id";
    $results = mysql_query($query)
	   or die("Query error:<br />" . $query . "<br />" . mysql_error());
		
	// pass results into a multidimensional array
	while ($row = mysql_fetch_assoc($results))
    {
        $result_array[] = $row;
    }   
	

    //return $result_array;
	
    echo json_encode($result_array);

?>