<?php
//For loop
//for ($i=0;$i<5;$i++)
//{
//    echo "Hello new world: $i<br>";
//}
$blogs=['blog1','blog2','blog3','blog4'];
//for each loop
//foreach ($blogs as $x){
//    echo $x.'<br>';
//}

$products=[
    ['name'=>'Shiny star','price'=>20],
    ['name'=>'green shell','price'=>10],
    ['name'=>'red shell','price'=>15],
    ['name'=>'gold coin','price'=>5],
    ['name'=>'lightning bolt','price'=>40],
    ['name'=>'banana skin','price'=>2],
];
foreach ($products as $p)
    {
        echo $p['name'].'-'.$p['price'];
        echo '<br>';
    }


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
         <h1>Products</h1>
            <ul>
                <?php foreach ($products as $product){?>
                   <h3 style="color: tomato"><?php echo $product['name'];?></h3>
                    <p><?php echo $product['price'] ?></p>
                <?php } ?>
            </ul>
</body>
</html>
