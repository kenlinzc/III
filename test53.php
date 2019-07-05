<?php
class Bike {
    //public $speed = 0;
    //private $speed = 0;
    protected $speed=0;
    function upSpeed(){
        $this->speed = $this->speed<1 ? 1 : $this->speed*2.5;
    }
    function downSpeed(){
        $this->speed = $this->speed<1 ? 0 :$this->speed*0.5;
    }
    function getSpeed(){
        return $this->speed;
    }
}
class Scooter extends Bike{ //繼承bike內容
    private $gear = 0;
    //override
    //function upSpeed(){
        //parent::upSpeed();
       //$this->speed = $this->speed<1 ? 2 : $this->speed*5;
    
    function chGear($gear){$this->gear = $gear;}
    function upSpeedV2(){
       $this->speed = $this->speed<1 ? 2 : $this->speed*($this->gear*5);
    }
}
class person{
    private $mybike; // has-a bike object
    private $myScoore;
    private $myname;

    function __construct($name){
        $this->myBike = new Bike;
        $this->myScooter = new Scooter;
        $this->myname = $name;
    }


}




$b1 = new Bike;
$b2 = new Bike;
$s1 = new Scooter;


$s1->upSpeed();
echo '<hr>';
echo $s1->getSpeed() . '<br>';
$s1->chGear(4);
$s1->upSpeedV2();
echo $s1->getSpeed() . '<br>';
$s1->upSpeedV2();
echo '<hr>';
$p1 = new Person('Brad');
var_dump($p1);
//$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();
//$b1->downSpeed();
//$b2->upSpeed();$b2->upSpeed();
//echo $b1->getSpeed() . '<br>';
//echo $b2->getSpeed();
