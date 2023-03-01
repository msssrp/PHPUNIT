<?php 


include "calculate.php";


use PHPUnit\Framework\TestCase;

class calculateTest extends TestCase{
    public function testAddNumber(){
        $n1 = new Calculate();
        $this->assertEquals(14,$n1->addNumber(5,9));
    }

    public function testAddNumberNegative(){
        $total = new Calculate();
        $this->assertEquals(-4,$total->addNumber(5,-9));
        
    }
}


?>