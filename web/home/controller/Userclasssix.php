<?php
header('Content-Type:text/html;charset=utf-8');
class Iphone{
    public $Phonename="honor10";//手机型号
    public $Phonecolor="black";//手机颜色
    public $Phonesize="5.84英寸";//手机尺寸
    public $Photosize="2400万px";//像素尺寸
    public $Runningmemory="6GB";//运行内存
    public function PhoneFunction(){//手机功能
        echo "发短信"."<br>";
        echo "打电话"."<br>";
        echo "玩游戏"."<br>";
        echo "听歌"."<br>";
        echo "购物"."<br>";
        echo "看小说"."<br>";
        echo $this->Phonename;//函数里面调用属性;
    }//PhoneFunction()结束
}//类结束
class Phone extends Iphone{
    public function Phone(){
        parent::PhoneFunction();
    }
}//子类结束
$Phone=new phone();
$Phone->Phone();
echo"</br>";
echo $Phone->Phonecolor;

?>