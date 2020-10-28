<?php
abstract class Bird {
    abstract public function canFly();
    abstract public function canSwim();

    public function canSound() {
        return true;
    }
}
class Parakeet extends Bird {
    public function canFly() {
        return "Parakeet can Fly";
    }
    public function canSwim() {
        return false;
    }
    public function color() {
        echo 'Color is green';
    }
}
class Duck extends Bird {
    public function canFly() {
        return false;
    }
    public function canSwim() {
        return true;
    }
    public function isDomestic()
    {
       echo "Duck is domestic birds";
    }

}
$parakeet = new Parakeet;
echo $parakeet->canFly();
echo "<br/>";
$duck = new Duck;
$duck->isDomestic();
?>