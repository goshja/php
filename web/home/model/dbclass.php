<?php
    // echo dirname(__DIR__);本文件路径;
    $conf=include(__DIR__."/config/dbConfig.php");//绝对路径
    class Db{    
        public $conn;  //数据库连接参数
        //const NUM = 13; //定义类常量
        //public static $NUM = 1313; //定义静态变量
        //构造函数，连接mysql-server
        public function __construct(){
            $conf=include(__DIR__."/config/dbConfig.php");  //使用config/dbConfig.php中的数据库连接参数
            $host=$conf['host'];
            $user=$conf['user'];
            $password=$conf['password'];
            $db=$conf['db'];
            $conn=mysqli_connect($host,$user,$password,$db);
            if ($conn->connect_error) {
                die('Connect to mysql failed.<br/>');
            } else {
                echo ('Connect to mysql successfully.<br/>');
                $this->conn = $conn;            
                $this->conn->query("set names utf8");
            }
            //echo self::NUM; //使用类变量
        }
        //析构函数，关闭mysql连接
        public function __destruct() {
            $this->conn->close();
            echo "mysql function closed successfully.<br/>";
        }
        
        public function login($str){
            $pp=mysqli_query($this->conn,"$str");
            $mp=[];
            while ($mm=mysqli_fetch_assoc($pp)){
                    $mp[]=$mm;
            }
            return $mp;
        }
        public function find($str){
            $pp=mysqli_query($this->conn,"$str");
            $mm=mysqli_fetch_assoc($pp);
            return $mm;
        }
        public function insert($sql){
            mysqli_query($this->conn,$sql);
            $res=mysqli_affected_rows($this->conn);
            return $res;
        }//添加内容;
        //定义类静态方法
        /*public static function sum() {
            echo (self::$NUM += 2).'<br/>';
        }*/
    }
    //测试代码
    //$a = new Db;
    //echo Db::$NUM;
   //Db::sum(); //使用类中的静态方法
?>