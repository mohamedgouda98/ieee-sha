<?php 

$x = [0,8,5,4,2] ; 
$y = [2,6,4,1] ;
$z = [4,5,7,2] ; 
$val = [''];

for($i = 0 ; $i < sizeof($x) ; $i++)
{
    for($j = 0 ; $j < sizeof($y) ; $j++)
    {
        for($k = 0 ; $k < sizeof($z) ; $k++)
        {
            if($x[$i] == $y[$j] && $y[$j] == $z[$k])
            {
                array_push($val , $x[$i]);
            }
        }
    }
}

for($i = 0 ; $i < sizeof($val) ; $i++)
{
    echo ($val[$i]);
}


?>