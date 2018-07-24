<?php
class User{
    public $rows=array();
    public function Setarray($arr){
        $this->rows=$arr;
    }
    public function Getarray(){
        echo "<pre>";
        print_r($this->rows);
    }
}
$p=new User;
$p->Setarray([10,20,30]);
$p->Getarray();
?>