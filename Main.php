
<?php
header("refresh:1");
class Fruit {
    //  private void UpdateReport(String riga) {
		       //   public  $connected = true;
	///	public $ReceivedMessages;
		public  $sock;
		// $txtReport = "";
		    // $admin = false;
			public $str;
			 public $byteArray;
       // List<String> ReceivedMessages = new List<String>();
public $ReceivedMessages=array();
		 public $name_one = array("num", "kmh", "acc", "tw", "poweron", "compowtot", "combrktot", "comdirec", "comlat", "cmdlight", "cmdscambio", "cmdstop", "cmdfrecce", "pbrake", "pvacuum", "cmdsand", "cmdopen0", "cmdwipe", "cmdpanto", "panto", "aopen0", "aopen1", "aopen2", "cmdopen1", "cmdopen2", "comlower", "thermalon", "frecce", "apilot", "apilotkmh", "interr", "intexr", "combrksta", "combrk", "compow", "kwh", "comf", "combrkel", "combrkdir", "pbrakedir", "brakex", "trazionen", "combrkini", "combrkmif", "brakexel", "trtimesec", "combrkperd1", "combrkperd2", "pantoerr"); 


 function __construct() 
 {
   
  
  //:void
	
	global $str;
	global  $byteArray ;
	global $iparr;
	global $ReceivedMessages;
 $sock = socket_create(AF_INET, SOCK_DGRAM, 0);
socket_bind($sock, '127.0.0.1', 2500);
$buf = '';
$remote_ip = '127.0.0.1';
$remote_port =2500;
$r = socket_recvfrom($sock, $buf, 2048, 0, $remote_ip, $remote_port);
if(substr($buf,0,15)=="SIMURAIL; VEHI;")
{
	   $iparr = preg_split ("/\;/", $buf); 
	
	  
		
		// echo "String value".$new_string."<br/>";
		// echo  "String value n/A" .$new_string2."<br/>";
		// echo "volecity:" .$float4."<br/>";
		// echo "potential:" .$float5."<br/>";
		// echo $float6."<br/>";
	   // echo $intval7."<br/>";
		//echo $float8."<br/>";
		//echo $new_string9."</br>";
		//echo $float10."</br>";
}
else if(substr($buf,0,8)=="SR_TRM01")
{
//$byteArray = unpack('C*', $buf);
$byteArray = unpack('f*', substr($buf,24,-1),0);
//print_r($byteArray);
 //$ledIR = $byteArray[32]; //intexr32 m
 //$ledGS = $byteArray[31]; //interr 31 n
//echo substr($buf,0,8);

}

else
   {

$bytet = unpack('C*', $buf);
$str = implode(array_map('chr', $bytet));
$xc="\r\n";
echo "[".date("H:i:s")."]".$str.PHP_EOL;
if($str!=null)
{
//array_push($ReceivedMessages,$str);

	//print_r($str);
 // if (count($ReceivedMessages)> 1000)
   // {
		
		//    unset($ReceivedMessages[0]); 

  //  }
	//print_r($ReceivedMessages);
 }

   }
  
  
 }
  
 /*
     public String CheckMessage(bool delete = false) 
	 {
            if (ReceivedMessages.Count > 0) 
			{
                String s = ReceivedMessages[0];
                if (delete) {
                    ReceivedMessages.RemoveAt(0);
                }
                return s;
            } else {
                return null;
            }
      }
*/ 
 
 function byteArrayResult()
 {
	 global $byteArray;
	 if($byteArray!=null)
	 {
		return  $byteArray;
	 }
	 
	 
 }
 
 
  
 function oneshotString()
 {
	 global $iparr;
	 if($iparr!=null)
	 {
		 
		  
	   $new_string=trim($iparr[2]);
	   $new_string2=trim($iparr[3]);
	   $float4  = floatval($iparr[4]);
	   $float5  = floatval($iparr[5]);
	   $float6  = floatval($iparr[6]);
	   $intval7  = intval($iparr[7]);
	   $float8  = floatval($iparr[8]);
	   $new_string9=trim($iparr[9]);
	   $float10  = floatval($iparr[10]);
		return  $iparr;
	 }
	 
	 
 }
 
/*
  function sayWorld($bool=false) {
	 
global $ReceivedMessages;

 
	// if(strlen($ReceivedMessages) >0 )
	 {
		///  $s=$ReceivedMessages;
		// if($bool)
		// {
			           unset($ReceivedMessages[0]); 

		 }
		 		return $s; 
	 }
	 else
	 { 
		return null; 
	 }
    }
*/
























}

$apple = new Fruit();
//$apple->UDPReceiver();
//$apple->sayWorld();
//echo $apple->sayWorld();
$apple->byteArrayResult();
$apple->oneshotString();
//echo "<br>> hello";
		
?>	
