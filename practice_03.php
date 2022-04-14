<?php

function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    return $result;
}
echo sum(100);

?>

<?php

//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function int($x) {
    $y = 2;
    $result = $x * $y;
    
    return $result;
}

echo int(20);

?>

<?php

//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b) {
     $result = $a + $b;
     
     return $result;
 }
 
 echo add(2,3);
 
 ?>
 
 <?php
 
 //$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function arrayproduct($arr) {
    $result = array_product($arr);
    
    return $result;
}

echo arrayproduct(array(1, 3, 5 ,7, 9));

?>

<?php

///下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}

echo max_array(array(1, 3, 5 ,7, 9));

?>

<?php
