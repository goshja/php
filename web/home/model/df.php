<?php
class Db{
    public $conn;
    public function   __construct(){
        $this->conn=mysqli_connect('127.0.0.1','root','123456');//以root身份登录mysqli,
      //  mysqli_select_db($this->conn,'medical');//选择数据库medical;
      //  mysqli_query($this->conn,'set names utf8');//防止乱码;
    }
    public function __destruct(){
        if (isset($this->conn)) {
            mysqli_close($this->conn);//关闭连接;
        }
    }
    public function select(){
        $sql="select * from login";//查找数据表的执行语句
        $res=mysqli_query($this->conn,$sql);//执行查找语句;
        $row=mysqli_fetch_assoc($res);//取其中的一条数据;
        print_r($row);
    }
    public function select1(){
        $sql="select * from login";//查找数据表的执行语句
        $res=mysqli_query($this->conn,$sql);//执行查找语句;
        while ($row=mysqli_fetch_assoc($res)) {
                $rows[]=$row;
        }
        print_r($rows);
    }//查找数据表所有的内容;
    public function select2($sql){
        $res=mysqli_query($this->conn,$sql);//执行查找语句;
        $rows=[];
        while ($row=mysqli_fetch_assoc($res)) {
                $rows[]=$row;
        }
        return $rows;
    }
}//类结束
//echo phpinfo();
// echo "<pre>";
//$sql="select * from login where id ='2' or user='lisi' or id ='4'  ";
$dd=new Db();
//echo"<pre>";
//print_r ($dd->select2($sql));
// var_dump($dd);
?>
