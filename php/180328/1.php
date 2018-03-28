<?php
// private 私有修饰符,类外不能调用成员属性,但在类里面可以使用

class Stu
{
    public $name="zhangsan";
    private $age=20;
    
    public function setAge($age){
        if($age>10){
            $this->age = $age;
        }
    }
    public function getInfo()
    {
        return $this->name.":".$this->age."<br/>";
    }
    
}

$s = new Stu();
//$s->age = -10; // 错误的
$s->setAge(-30);
echo $s->getInfo();