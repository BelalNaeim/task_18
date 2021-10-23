<?php
require 'db_class.php';


class articale{

    private $title;
    private $content;
    private $image;


    public function __construct($value1,$value2,$value3){

        $this->title        = $value1;
        $this->content      = $value2;
        $this->image        = $value3;

    }


    public function Create(){
        # Create Db Obj
        $dbObj = new DataBase;

        $sql = "INSERT INTO `articles`(`title`, `content`, `image`) VALUES ('$this->title','$this->content','$this->image ')";

        $result = $dbObj->DoQuery($sql);

        return $result;
    }


}



?>
