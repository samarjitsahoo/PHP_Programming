<?php
class Player {
    // Properties
    public $name;
    public $speed = 5;
    public $running = false;

    // Methods
    function set_name($name){
        $this->name = $name;
    }
    
    function get_name(){
        return $this->name;
    }

    function run(){
        $this->running = true;
    }

    function stopRun(){
        $this->running = false;
    }
}

echo "Lets understand OOPs Using GTA Vice City <br>";
$player1 = new Player();
$player1->set_name("Harry");
echo $player1->get_name();
echo "<br>";
echo $player1->speed;
echo "<br>";

$player2 = new Player();
$player2->set_name("Rohan");
echo $player2->get_name();
echo "<br>";

$player3 = new Player();
$player3->set_name("SkillF");
echo $player3->get_name();
echo "<br>";


?>