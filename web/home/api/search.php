<?php 
    include_once('./model/Db.class.php');

    class Search extends Db {
        public function __construct($search) {   //构造函数中传入要搜索的文本值
            parent::__construct();
            $rows = $this->select2($search);
            var_dump($rows);
        }
    }
    
    //test code

    $a='a';
    $sql = "select * from login where desc like '%".$a."%'";
    $dbs = new Search($sql);
?>