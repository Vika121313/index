<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="nav-bar">
        <ul>
            <li><a  href="#logo-name"><i class="a-home"></i>HTML</a></li>
            <li><a href="#aboutme">PHP</a></li>
            <li><a href="#">GitHub</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">Javascript</a></li>
        </ul>
        </div>
        <div id="logo-name">
            <hr>
            <h1> Мои суперсилы</h1>
            <hr>
            <p>Овладел новыми видами магии</p>
<?php
echo 'Hello,World!!!!!';
$box='Box';
echo $box;
$number_one=1;
$number_twoooo=2;
echo $number_one+$number_twoooo;

$n = 2;
switch($n){
    case 1:
        echo"Число равное двум";
        break;
    case 2:
        echo"Число равное пяти";
        break;
    default:
        echo"tehththhtht";
        break;


$m=4;
while(--$m){
    echo "Hello\n";
}
}

?>

        </div>
    </header>   
</body>
</html>