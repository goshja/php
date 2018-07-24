<?php
class User{
    public $name="Miss lee";//赋值可以为字符串,整形,数组,空数组,对象
    public $age=18;
    public function say(){
        echo 123;
   }
};//类结束,类开头是大写,类后面没有小括号,
$a=new User();//创建一个新的类;
echo "<pre>";
var_dump($a);
?>
