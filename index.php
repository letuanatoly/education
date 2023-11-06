<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>пратика</title>
</head>
<body>
<h1>практика</h1>
<?php
function minof3 (float $x, float $y, float $z): float
{
    if(($x < $y) && ($x < $z)):
        return $x;
    elseif(($y < $x) && ($y < $z)):
        return $y;
    else:
        return $z;
    endif;
}
function muliply2by2(float &$x, float&$y)
{
    $x *= 2;
    $y *= 2;
}
function factorial(int $x)
{
    if($x == 1)
        return 1;
    return $x * factorial($x - 1);
}
function printfrom0ton(int $n)
{
    if($n>0)
    {
        echo printfrom0ton($n - 1);
        echo $n . '<br>';
    }
    else
    {
        echo '0<br>';
    }
}
echo minof3(5, 7, 3) . '<br>';
$x = 3;
$y = 4;
muliply2by2($x, $y);
echo $x . '<br>';
echo $y . '<br>';
echo factorial(5) . '<br>';
printfrom0ton(10);
?>
</body>
</html>