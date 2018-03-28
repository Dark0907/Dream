<?php

//         private     protected       public
// 本类内     Y           Y              Y
// 子类内     N           Y              Y
// 外部       N           N              Y

class  A
{
    public $x = 100;
    protected $y = 200;
    private $z = 300;
    
    public function fun1()
    {
        echo "public function ... <br/>";
        //???????????
        echo $this->x.":".$this->y.":".$this->z;
    }
    
    protected function fun2()
    {
        echo "protected function ... <br/>";
    }
    
    private function fun3()
    {
        echo "private function ... <br/>";
    }
    
}

//实例化
$a = new A();
echo $a->x;
//echo $a->y;
//echo $a->z;

echo $a->fun1();
//echo $a->fun2();
//echo $a->fun3();
