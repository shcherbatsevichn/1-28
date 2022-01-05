<?php 
error_reporting(-1);
//Преобразовать  числа  заданной  последовательности  натуральных   чисел  n0 ,n1,...,nm так,
//чтобы цифры каждого числа образовывали максимально возможные числа. 
$n = 0;
$nm = 1000;

$resvalue = 0;

for($i = $n; $i <= $nm; $i++){
    $resvalue = sortmax($i);
    echo($resvalue."<br>");
}

function sortmax($n){
    $res = 0;
    $c = 0;
    for($i = 0; $i <= 9; $i++){
        $value =  $n;
        while($value != 0){  
            $num1 = round((($value / 10 )- (floor($value / 10)) )*10);  //раскладываем число на цифры
            $value = floor($value / 10);  
            if($num1 == $i){
                $dgr = ($num1 * pow(10, $c));
                $res = $res + $dgr;
                $c++;
            }
        }
    }
    return $res;
}
