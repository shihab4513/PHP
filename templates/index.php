<?php

//MySQLi or PDO
//connect to database
$conn=mysqli_connect('localhost','shihab4513','shihab4513','ninza_pizza');
//check the connection
if (!$conn)
{
    echo 'Connection error: '.mysqli_error();
}
//write query for all pizzas
$sql='SELECT id,title,ingredients FROM pzzas';
//Make query and get the result
$result=mysqli_query($conn,$sql);
//fetch the resulting rows as an array
$pzzas=mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

print_r($pzzas);

?>


<!doctype html>
<html>

<?php include 'header.php';?>
<?php include 'footer.php';?>

</body>
</html>
