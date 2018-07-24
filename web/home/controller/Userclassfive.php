<?php
class Father{
    public $str=133;
    public function text(){
        echo 888;
    }
}
class Child extends Father{
    public $str=999;//当父类属性和子类属性名称相同时,应该调用子类属性的名称,即子类属性优先于父类属性;
    public function text2(){
       echo 456;
    }
    public function text3(){
        parent::text1();//在函数里面子类调用父类函数格式;
    }
}
$child=new Child();//一般子类的调用格式;
$child->text3();//继承父类函数
echo $child->str;//继承父类属性;
?>