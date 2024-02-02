<?php
//variable scope

//local vars
function myFunc()
{
    $price=10;
    echo $price;
}
// myFunc();
//echo $price;
function myFuncTwo($age)
{
    echo $age;
}

//myFuncTwo(23);
//Global variable
$name ='mario';
//function sayHello()
//{
//  global $name;
//  $name='shihab';
//    echo "hello ".$name.'<br/>';
//}
//sayHello();
//echo $name;

function sayBye($name)
{

    $name='wario';
    echo "bye $name<br/>";
}
sayBye($name);
echo $name;







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
