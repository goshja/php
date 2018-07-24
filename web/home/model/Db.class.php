<?php
//数据库动态类
class Db{
    protected $conn; //用于存放mysqii对象
    protected $res; //用于存放mysqli_result对象
    protected $sql; //存放上一条刚执行过的sql_query
    protected $tabNm; //存放table name
    protected $cond; //存放如where等选择条件，以多元关联数组形式存在，select后清空
    
    //初始化成员变量
    public function __construct(){
        //echo "mysql initiated<br>";
        $conf = include('config/dbConfig.php');
        $host=$conf['host'];
        $user=$conf['user'];
        $password=$conf['password'];
        $db=$conf['db'];
        $this->conn = mysqli_connect($host, $user, $password, $db); //创建连接，获得mysqli对象
        $this->query('set names utf8');//防止乱码;
        //echo "success.";
    }
    //对象销毁
    public function __destruct(){
        if (isset($this->conn)) {
            $this->conn->close();//关闭连接;
            //echo "closed";
        }
    }
    
    //SQL执行query命令
    public function query($sql = '') {
       if ($sql) {
            $this->sql = $sql;
        }
        if ($this->sql) {
            $this->res = mysqli_query($this->conn, $this->sql);
        }
        echo "<p>$sql</p>";
        return $this;
    }
    
    //增：$arr 为要增加的一行数据，$tb:表名
    public function insert($arr, $tb = '') {
        if ($tb) {
            $this->tabNm = $tb;
        }
        
        $sql = NULL;
        foreach ($arr as $a) {
            if (!is_NULL($sql)) {
                $sql .= ',' ; //如果非空则加上逗号，以便连接下一个值
            }
            if (is_string($a)) {
                $a = "\"$a\"";  //如果值为字符串，则加上双引号
            } 
            $sql .= $a; //值连接
        }
        $sql = "INSERT INTO $this->tabNm VALUES ($sql)" ;
        return $this->query($sql);
    }
    
    //删 $cond:条件字符串，如user_name="lucy"
    //$tb: 表名
    public function delete($cond, $tb) {
        $sql = "DELETE FROM $tb WHERE $cond;";
        return $this->query($sql);
    }
    
    //改：update
    public function update($set, $cond, $tb) {
        $sql = "UPDATE $tb SET $set WHERE $cond";
        return $this->query($sql);
    }
    
    //查1：select
    /*
     * 根据传入的sql语句查询数据
     * @access public
     * @param string
     * @return Db $this对象
     */
    public function select ($sql = '') {
        if ( !$sql  && $this->tabNm) {
            $sql = "SELECT * FROM $this->tabNm ";
        }  else if ($sql && $this->tabNm) {
            $sql = "SELECT $sql FROM $this->tabNm ";
        }
        //若存在where条件，则加上where选择语句
        if ($this->cond['where']) {
            $sql_where = '';
            foreach ($this->cond['where'] as $val) {
                if ($sql_where) {
                    $sql_where .= " {$val['logic']} "; //与上一句$this->where用and／or连接
                }
                foreach ($val['arrWhere'] as $key => $value) {
                    $sql_where .= " $key=\"$value\" {$val['logic']}"; //在同一句$this->where间用and／or连接
                }   $sql_where = substr($sql_where, 0, -strlen($val['logic']));                //去掉最后一个logic
            }
            $sql .= " WHERE $sql_where ";
        }
        $this->query($sql);
        $this->cond = '';
        return $this;
    }
    
    //where函数语句
    public function where (Array $where, $logic = 'AND') {
        $this->cond['where'][] = ['arrWhere' => $where, 'logic' => $logic]; //选择条件$cond里的where数组中，
                                                                                                           //加上一行新的where条件和and／or
        return $this;                                                                                               
    }
    
    //设置存放在对象中的table名字
    function tab($tabNm) {
        $this->tabNm = $tabNm;
        return $this;
    }
    
    //查2：将SQL结果转成数组输出
    /*
     * @access public
     * @param N/A - $this->res
     * @return array数组
     */
    public function toArray() {
        $res = $this->res;
        if ($res!='') {
            $resArr = [];
            while ($row=mysqli_fetch_assoc($res) ) {
                $resArr[]=$row;
            }
            return $resArr;
        }
    }
    
    
}//类结束

//测试代码
$a = new Db;
//$a = Db::fetch_all('SELECT * FROM `login` where `user_id`BETWEEN 1 AND 2');
//var_dump($a);
//$arr = [5,'lafa','asdf',time(), 'desc5'];
//var_dump(Db::insert($arr, 'login'));
$b = $a->tab('login')->where(['name'=>'adsf','pwd'=>'rthyttre'], 'OR')->where(['version'=>'v3'], 'AND')->select()->toArray();
var_dump($b);
//echo phpinfo();
// echo "<pre>";
//$sql="select * from login where id ='2' or user='lisi' or id ='4'  ";
//$dd=new Db();
//echo"<pre>";
//print_r ($dd->select2($sql));
// var_dump($dd);
?>