<?php


class IMG_MANAGER{

public function checking($img_name){
    $this->img_name = $img_name;
    $scanner = scandir('../newbanker');

    unset($scanner[0],$scanner[1]);

    if(!in_array($this->img_name,$scanner)){

     return true;

    }else{
   return false;

    }
}

public function take_real_name($imgs){
    $this->imgs = $imgs;
    $names = $this->imgs['name'];
    $real_img = $this->imgs['tmp_name'];
    $ext = substr($names,strlen($names)- 4,strlen($names));
    $real_name = md5($names).$ext;
    return $real_name;

}



public function createimg($imgs){
$this->imgs = $imgs;
$names = $this->imgs['name'];
$real_img = $this->imgs['tmp_name'];
$ext = substr($name,strlen($name)-4,strlen($name));
$real_name = md5($name).$ext;
if($this->checking('img')){

  mkdir('img',0777,true);

}else{
move_uploaded_file($real_img,'img/'.$real_name);
}

}

}


$imgss = new IMG_MANAGER();













?>