<?php

require_once "../config/settings.php";

function dd($data, $stop=null){
    echo "<pre>Dump:<br>";
    print_r($data);
    echo "</pre>";

    if($stop!=null && $stop!=0) exit();
}



function connect()
{
    $ar = get_param();
    $dsn = "mysql:dbname=".$ar['db_name'].";host=127.0.0.1;";
    $login=$ar['user'];
    $password=$ar['pass'];
    try {
        $link=new PDO($dsn,$login,$password);
    }catch (PDOException $e){
        echo "Some errors ".$e->getMessage() ;
    }
    return $link;
}