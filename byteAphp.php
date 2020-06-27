

<?php
header("refresh:1");
header("Content-Type: application/json");

session_start();
require 'Main.php';

//include("file1.php");
class ClassB {

   public $x;
 public $y;
    public function callbyteF(){
        $a = new Fruit();
        return $a-> byteArrayResult();
    }

    

 // public function oneshotStringB(){
      //  $a = new Fruit();
      //  return $a-> oneshotString();
    //}







}

$b = new ClassB();

$x=$b->callbyteF();
echo json_encode($x);



//$y=$b->oneshotStringB();

//print_r( $y);
//echo "<br> hello";
//echo $b->getName();
//echo ClassB::callAStatic();

?>