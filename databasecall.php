<?php
/*

login creditions to sql server
they dont work because github pages is only static.. :(

$servername = 
$username = 
$password = 
$dbname = 
*/
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, fact FROM facttable";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);
$fetchNum = rand(1, $num_rows);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	if ($row["id"] == $fetchNum) {
    		echo $row["fact"];
    	}
    } 
}  else {
    echo "Empty database!";
} 

$conn->close();

?>
