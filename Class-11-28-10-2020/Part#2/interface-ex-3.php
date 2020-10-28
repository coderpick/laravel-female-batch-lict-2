<?php 
interface Calculation {
    public function sum( $a, $b );
    public function sub( $a, $b );
}

class Calculator implements Calculation
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function div($a, $b)
    {
        return $a / $b;
    }

}

$cal = new Calculator;
echo $cal->sum(30,20);

?>