<?php
//******************************index arrays************************************
$peopleOne=['shihab','raihan','riha'];
//echo $peopleOne[0];
$peopleTwo=array('kent','yubhan','Sndra');
//echo $peopleTwo[1];
$ages=[20,54,96,78];
//print_r($ages)
$ages[1]=25;
//print_r($ages);
//To add new value on array
$ages[]=60;
array_push($ages,70);
//print_r($ages)
//To count how much element in an array
//echo count($ages);
//To marge two array into third array
$peopleThree=array_merge($peopleOne,$peopleTwo);
//print_r($peopleThree)
//***********************************Associative array**************************************
//In associative way you can give key and its corresponded value
$ninjasOne=['name'=>'shihab','age'=>23];
//echo $ninjasOne['name'];
//print_r($ninjasOne);
$ninjasTwo=['browser'=>'chrome','fruit'=>'Naspati'];
//print_r($ninjasTwo);
//To add new value in associated array
$ninjasTwo['hobby']='Watching series';
//print_r($ninjasTwo);
//To count associative array
//echo count($ninjasOne);
//To marge two associative array
$ninjasThree=array_merge($ninjasOne,$ninjasTwo);
//print_r($ninjasThree);
//****************************Multi-Dimensional array*************************************
//$blogs=[
//        ['mario party','mario','lorem',30],
//    ['mario cart cheats','toad','lorem',25],
//    ['zelda hidden chests','link','lorem',50]
//];
//print_r($blogs);
//print_r($blogs[1]);
//print_r($blogs[1][3]);
//****************************Associative Multi-Dimensional array*************************************
$blogs=[
    ['title'=>'mario party','author'=>'mario','content'=>'lorem','likes'=>30],
    ['title'=>'mario cart cheats','author'=>'toad','content'=>'lorem','likes'=>25],
    ['title'=>'zelda hidden chests','author'=>'link','content'=>'lorem','likes'=>50]

];
//To access particular array
//echo $blogs[2]['title'];
//To count array
//echo count($blogs);
//To add new array
$blogs[]=['title'=>'Castle party','author'=>'peach','content'=>'lorem','likes'=>100];
//print_r($blogs);
//array pop function last element of an array and return it
$popped=array_pop($blogs);
print_r($popped);


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
