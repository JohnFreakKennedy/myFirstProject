<?php

require_once "../app/function.php";

$link=connect();
$query = "select * from users";
//dd($link);
$ar=$link->query($query)->fetchAll(2);
//dd($ar);
foreach($ar as $item){
    dd($item);
}
