<?php

class DB{

/**
 * Class constructor.
 */
public function __construct()
{
    $this->host = 'localhost';
    $this->user ='tbsbupav';
    $this->pass = 'Oyxctn6vHbPa';
}

public function connection($dbname){
$this->dbname = $dbname;

$connect = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);

if($connect){

return $connect;

}else{


    return die('connection failed');
}

}




}


$col = new DB;

$con = $col->connection('tbsbupav_tbsbplc');









?>