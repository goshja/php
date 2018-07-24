<?php	//留言类
	class feedback  {
    public $username;
    public $content;
    public $date;

    function leaveMsg()
    {
        echo $content . "<br/>" . $username . " from " . $date . "<br/>";
    }
} // 类结束
?>
