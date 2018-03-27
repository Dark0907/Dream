<?php
//类的构造方法和析构方法

class Stu
{
	//成元属性
	public $name;
 	public $age;
	/**
      构造方法,就是new 实例化类,产生对象时自动会调用的方法,目的初始化对象
      直接给成员属性赋值
	*/

     public function __construct($name,$age)
     {
     	$this->name = $name;
     	$this->age  = $age;
     }

     public function getInfo()
     {
     	return $this->name.":".$this->age;
     }

     //析构方法,执行完成后自动销毁
     public function __destruct()
     {
 		
     }

}

//实例化
$stu = new Stu("houqiang",18);
echo $stu->getInfo();