<?php

$products=[
    ['name'=>'shiny star','price'=>20],
    ['name'=>'green shell','price'=>10],
    ['name'=>'red shell','price'=>15],
    ['name'=>'gold coin','price'=>5],
    ['name'=>'lightning bolt','price'=>40],
    ['name'=>'banana skin','price'=>2],
];

foreach ($products as $p)
{
    if ($p['name']==='lightning bolt')
    {
        break;
    }

    if ($p['price']>15)
    {
        continue;
    }
    echo $p['name'].'<br/>';
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

</body>
</html>
