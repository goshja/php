<?php
class Father{
    private function a(){
            echo 123;
    }
    public function b(){
            echo 123;
    }
    protected function c(){
        echo 123;
    }
}
class Child extends Father{
    public function e(){
        parent::a();
    }
    public function f(){
        parent::b();
    }
    public function g(){
        parent::c();
    }
}
$father=new Father;
// $father->a();//报错;
// $father->b();//正常使用;
// $father->c()//报错;
$child=new Child;
// $child->e();//报错;
// $child->f();//正常使用;
// $child->g();//正常使用
//private私有的,只能在本类的内部进行访问,外部(包括其子类都不可以访问)
//protected :受保护的,只能在本类的内部,及其子类的内部进行访问,外部不可以访问;
?>