

<?php
$a = array(2,4,6,8);

function sum($arr){
    $result = 0;
    foreach ($arr as $item){
        $result += $item * $item;
    }
    return $result;
}

echo sum($a)

?>