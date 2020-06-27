<?php
header("refresh:1");
session_start();
require 'Main.php';

//include("file1.php");
class ClassB {

    public $name = 'B';
public $x;
    public function getName(){
        return $this->name;
    }

    public function callA(){
        $a = new Fruit();
       // return $a->sayWorld();
    }

    public static function callAStatic(){
        $a = new Fruit();
        //return $a->sayWorld();
    }


    public function callbyteF(){
        $a = new Fruit();
        return $a-> byteArrayResult();
    }
}

$b = new ClassB();
//while(true)
	
$now = date("Y-m-d H:i:s");

//$timestring = $now->format('Y-m-d h:i:s');
$x ="";
//$x.=;
$x .=$b->callA()."\r\n";
//echo $x;
//print_r( $b->callbyteF())."<br> ";

//echo $b->getName();
//echo ClassB::callAStatic();

?>
