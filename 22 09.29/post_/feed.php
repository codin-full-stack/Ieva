<?php
include 'header.php';



$sql = 'SELECT * FROM post';
var_dump($sql);
$result = $con->query($sql);


include 'footer.php';
?>