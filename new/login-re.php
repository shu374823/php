<?php

if(!empty($_GET)){
    if($_GET['nameacc']==$acc){
        echo "輸入正確";
    }
}

$account= $_GET['nameacc'];
$password= $_GET['namepw'];
echo $account;
echo "<br>";
echo $password;

?>