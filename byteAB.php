
<?php
header("refresh:1");
session_start();
require 'byteA.php';

//include("file1.php");
class ClassBC {

   public $x;

    public function callbyteFC(){
        $a = new ClassB();
        return $a-> callbyteF();
    }



}

$b = new ClassBC();

$x=$b->callbyteFC();
//$x=array();
$ledIR = $x[32]; //intexr32 m
echo $ledIR."</br>";
$ledGS = $x[31]; //interr 31 n
echo $ledGS;

//compow 35
$compow = $x[35];
$compowx=$compow*150;
//echo "<br> hello";
//echo $b->getName();
//echo ClassB::callAStatic();

?>