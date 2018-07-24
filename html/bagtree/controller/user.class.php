<?php
    /**
     * 自动化初始化缓存
     * access public
     * @author php
     *@param string $usrnm 用户名
     *@return User;
     */
	class User {
		public $username;
		public $password;
		public $register_time;
		public $email;
		public $rows;
	    private $age = 18;
	    protected $money = "very much";

		function login() {
			echo "user logging in...<br/>";//TODO:登录过程。。。
		}
		function __construct($usrnm) {	//构造函数 赋值给user
			$this->username = $usrnm;
			echo $this->username;
			echo "<br/>";
		}
		
		function __destruct() {
		    //析构函数
		}
		
		public function setArr($arr) {
		    $this->rows = $arr;
		}
		
		public function getArr() {
		    var_dump($this->rows);
		}

	} //user对象结束
	
	class vip extends User {   //继承user类
	    public $vip_title = "leader"; //继生类自身属性
	    public function showMoney() {
	        echo ($this->money);
	    }
	    public function showTitle() { //继生类自身方法
	        echo $this->vip_title;
	        echo "<br/>";
	    }
	    public function login() { //重载父类login方法
	        parent::login();
	        echo "vip logging in...<br/>";
	    }
	}//类结束
	
	$u = new User("John Smith");
	$u->setArr([5,6,3,"asdfasdf"]);
	$u->getArr();
	//echo $u->age;
	$svip = new vip("super man");  //实例化一个vip
	$svip->showMoney();
	$svip->setArr([[23,545],["3434",3434,"ladsfjwefokk"]]);
	$svip->getArr();
	$svip->showTitle();
?>
