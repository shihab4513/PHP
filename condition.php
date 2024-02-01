<?php
//$price=20;
//
//if ($price<10)
//{
//    echo 'condition is met';
//}
//else{
//    echo 'condition is not met';
//}

$products=[
    ['name'=>'shiny star','price'=>20],
    ['name'=>'green shell','price'=>10],
    ['name'=>'red shell','price'=>15],
    ['name'=>'gold coin','price'=>5],
    ['name'=>'lightning bolt','price'=>40],
    ['name'=>'banana skin','price'=>2],
];

//foreach ($products as $p){
//    if ($p['price']<15){
//        echo $p['name'].' '.$p['price'].'<br/>';
//    }
//}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
       <div>
           <ul>
               <?php foreach ($products as $p){ ?>
               <?php if ($p['price']>15){ ?>
               <li class="text-sky-400 text-3xl"><?php echo $p['name'].' '.$p['price'].'<br/>' ?></li>
               <?php }?>
               <?php }?>
           </ul>
       </div>
</body>
</html>
