<?php
define('HOST', "3.129.211.138");
define('DBUSER', "root");
define('PASS', "1234");
define('DB', "myexample");
define('PORT', 3306);

$link=mysqli_connect(HOST,DBUSER,PASS,DB,PORT);

// Check connection
if (mysqli_connect_errno($link)){
    echo "Failure to connect: " . mysqli_connect_error();
}

$sql = "SELECT * FROM mytable";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["myfield"]. "<br>";
    }
} else {
    echo "0 results";
}
$link->close();

echo 'version2';

?>
