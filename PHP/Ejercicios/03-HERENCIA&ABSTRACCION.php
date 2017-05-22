<?php
class Unit {
	protected $alive=true;
	protected $name;
	
	public function __constructor($name){
		$this->name=strtolower($name);
	}
	public function getName()  {
		return ucfirst($this->name);
	}
	public function move($direction){
		echo "<p>{$this->name} avanza hacia $direction</p>";
	}
	public function attack($opponent){
		echo "<p>{$this->name} ataca a $opponent</p>";
	}
}
		
$silence=new Unit('Silence');
echo $silence->getName();

$silence->move('el norte');
$silence->attack('Ramm');

class Soldier{
}
class Archer{
}