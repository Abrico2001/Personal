

<?php
header("refresh:1");
session_start();
require 'Main.php';

//include("file1.php");
class ClassB {

   public $y;


  public function oneshotStringB(){
        $a = new Fruit();
        return $a-> oneshotString();
    }




}

$b = new ClassB();
//while(true)
$y= $b->oneshotStringB();

echo json_encode($y);
	 //  $float10  = floatval($y[10]);
//echo $float10;

//echo "<br> hello";
//echo $b->getName();
//echo ClassB::callAStatic();

?>