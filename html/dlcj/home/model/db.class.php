<?php 
class db {
    private $mysqlConfig;
    
    public function __construct() {
        $this->mysqlConfig = include (__DIR__.'/config.php');
    }
}

?>