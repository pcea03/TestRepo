<?php
$i = 1;
$ii = 1;
do{
    $i++;
    echo "* <br>";
    if($i==9){
        do{
            $ii++;
            echo "*";
        }while($ii <= 8);
    }
}while($i <=9);

?>