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
$sql='SELECT id,title,ingredients,email FROM pzzas ORDER BY created_at';
//Make query and get the result
$result=mysqli_query($conn,$sql);
//fetch the resulting rows as an array
$pzzas=mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//print_r($pzzas);
//print_r(explode(',',$pzzas[0]['ingredients']));
$i=0;


?>


<!doctype html>
<html>
<style> <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script></style>

<?php include 'header.php';?>

<h4 class="center grey-text">Pizzas</h4>
<div class="container">
    <div class="row">
        <?php foreach ($pzzas as $pizza) :?>
        <div class="col s6  md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($pizza['title'])?></h6>

                    <ul>
                        <?php foreach (explode(',',$pzzas[$i]['ingredients']) as $ing): ?>
                        <li><?php echo htmlspecialchars($ing); ?></li>
                        <?php  endforeach; $i=$i+1; ?>
                    </ul>
                    <div><?php echo htmlspecialchars($pizza['email'])?></div>
                </div>
                <div class="card-action right-align">
                    <a href="#" class="brand-text">More info</a>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        <?php if (count($pzzas)>=3): ?>
        <p>there are 3 or more pizzas</p>
        <?php else: ?>
        <p>there are less than 3 pizzas</p>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php';?>

</body>
</html>
<!--we can use ':' for first bracket 'endforeach' for second bracket -->

