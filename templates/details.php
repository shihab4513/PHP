<?php
global $conn;
include "db_connect.php";
//Check GET request id param
if (isset($_GET['id']))
{
    $id=mysqli_real_escape_string($conn,$_GET['id']);

//    make sql
    $sql= "SELECT * FROM pzzas WHERE id=$id";

//    get the query result
    $result=mysqli_query($conn,$sql);

//    fetch result in array format
    $pizza=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
    print_r($pizza);
}



?>


<!doctype html>
<html lang="en">
<?php include('header.php'); ?>
<div class="container center">
    <?php if ($pizza): ?>
    <h4><?php echo htmlspecialchars($pizza['title'])?></h4>
    <p>Created by: <?php echo htmlspecialchars($pizza['email'])?></p>
    <p><?php echo date($pizza['created_at'])?></p>
    <h5>Ingredients:</h5>
    <p><?php echo htmlspecialchars($pizza['ingredients'])?></p>
    <?php else: ?>
    <h5>No such pizza exists!</h5>
    <?php endif; ?>
</div>
<?php include('footer.php'); ?>

</html>

