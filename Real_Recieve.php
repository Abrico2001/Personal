
<!DOCTYPE html>
<meta charset="utf-8">
   <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 

<head>
<style>
body {
  background-color: #fefbd8;
}

h1 {
  background-color: #80ced6;
}

div {
  background-color: #d5f4e6;
}

span {
  background-color: #f18973;
}
</style>
</head>

<body bgcolor="red">


<?php
//header("refresh: 1");
	$ReceivedMessages = array();
//header("Refresh:10");
//public Vehicles Vehicle;
     //   List<String> ReceivedMessages = new List<String>();
		
		

       // public long LastHello = 10;
$name_one = array("num", "kmh", "acc", "tw", "poweron", "compowtot", "combrktot", "comdirec", "comlat", "cmdlight", "cmdscambio", "cmdstop", "cmdfrecce", "pbrake", "pvacuum", "cmdsand", "cmdopen0", "cmdwipe", "cmdpanto", "panto", "aopen0", "aopen1", "aopen2", "cmdopen1", "cmdopen2", "comlower", "thermalon", "frecce", "apilot", "apilotkmh", "interr", "intexr", "combrksta", "combrk", "compow", "kwh", "comf", "combrkel", "combrkdir", "pbrakedir", "brakex", "trazionen", "combrkini", "combrkmif", "brakexel", "trtimesec", "combrkperd1", "combrkperd2", "pantoerr"); 
if (!extension_loaded('sockets')) {
    die('The sockets extension is not loaded.');
}
$sock = socket_create(AF_INET, SOCK_DGRAM, 0);
socket_bind($sock, '127.0.0.1', 2500);
$buf = '';
$remote_ip = '127.0.0.1';
$remote_port =2500;
$r = socket_recvfrom($sock, $buf, 2048, 0, $remote_ip, $remote_port);


//print_r(unpack("C*",$	));


//echo substr($buf,0,15);
if(substr($buf,0,15)=="SIMURAIL; VEHI;")
{
	
	   $iparr = preg_split ("/\;/", $buf); 
	   $new_string=trim($iparr[2]);
	   $new_string2=trim($iparr[3]);
	   $float4  = floatval($iparr[4]);
	   $float5  = floatval($iparr[5]);
	   $float6  = floatval($iparr[6]);
	   $intval7  = intval($iparr[7]);
	   $float8  = floatval($iparr[8]);
	   $new_string9=trim($iparr[9]);
	   $float10  = floatval($iparr[10]);
		
	//	 echo "String value".$new_string."<br/>";
		// echo  "String value n/A" .$new_string2."<br/>";
		// echo "volecity:" .$float4."<br/>";
		// echo "potential:" .$float5."<br/>";
		// echo $float6."<br/>";
	    //echo $intval7."<br/>";
		//echo $float8."<br/>";
		//echo $new_string9."</br>";
		//echo $float10."</br>";
}
else if(substr($buf,0,8)=="SR_TRM01")
{
//$byteArray = unpack('C*', $buf);
$byteArray = unpack('f*', substr($buf,24,-1),0);
//print_r($byteArray);
$ledIR = $byteArray[32]; //intexr32 m
$ledGS = $byteArray[31]; //interr 31 n
 
 for($i=0; $i<=48; $i++)
 {
$Response_str = array($name_one[$i]=>$byteArray[$i+1]);
foreach($Response_str as $x => $x_value) {
   echo  $i . "=" . $x . "=" . $x_value;
  echo "<br>";
	//$ledIR =$x_value[30]; //intexr32 m
 //$ledGS =$x_value[31]; //interr 31 n
}
 }


}

//String stringa = Encoding.ASCII.GetString(received);


else
   {

$bytet = unpack('C*', $buf);
	$str = implode(array_map('chr', $bytet));
	print_r($str);
//$ReceivedMessages.Add($str);
     array_push($ReceivedMessages,$str);
print_r($ReceivedMessages);
  if (count($ReceivedMessages)> 1000)
    {
		echo count($ReceivedMessages);
     //$ReceivedMessages.RemoveAt(0);
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
 

function foo($bool = false)
//: void
{
	  global $ReceivedMessages;

	if(count($ReceivedMessages) > 0)
	{
		 $s = $ReceivedMessages[0];
	return $s;
	 if ($bol) {
                  //  ReceivedMessages.RemoveAt(0);
				  
                }
				}
}

echo foo(false);




//echo "Looping using for: \n"; 
for($n = 0; $n <= 48; $n++){ 
   // echo $name_one[$n], "\n"; 
//echo$byteArray[$n+1]; 
	//echo $student_one[$n]; 
} 


$vehicle =""; 
 $vehicle .= chr(substr($buf,8,24)); 
 //echo ($vehicle); 
 
 //echo ("hello".$vehicle); 
 
//$byteArray = unpack('C*', $buf);
//$str = implode(array_map('chr', $array));
//$byteArray = unpack("N", $buf);

//echo utf8_strlen($buf);
 // $utf8array = utf8_split($buf);
  //print_r($utf8array); 
//echo utf8_url_slug( $buf );
//print_r( utf8_codepoints( $buf , true ) );  //Unicode Style Code Points
 //print_r( utf8_split( $buf ) );

//example :
//=print_r(utf8_split($buf));
  //$strx= utf8_split( $buf );
//echo iconv("UTF-8", "ISO-8859-1", $strx);
//$x=utf8_codepoints($buf); 
//echo gettype($x);

//$strx= implode(', ', $x);

//print_r($x);
//for($i=0;$i<=count($x);$i++)
//{
//echo utf8_decode($x[$i]);
//}
//echo utf8_decode ( $x ) ;
//cho  utf8_split($buf);
//echo mb_convert_encoding($buf, "auto");
//$strx=utf8_split( substr($buf,0,300));
//print_r( utf8_split( $buf ) );
 //print_r( utf8_codepoints($buf,0,300 ) );        //Integer Code Points
  //Unicode Style Code Points
//print_r( str_split( $buf ) );
//echo mb_detect_encoding($buf);
//document.getElementById("dem3").innerHTML = pos;
    
//ocument.getElementById("demo2").innerHTML =array
?>
<canvas id="IR" width="75" height="75"
style="border:1px solid #c3c3c3;">
</canvas></br>
<canvas id="GS" width="75" height="75"
style="border:1px solid #c3c3c3;">
</canvas>



<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
   padding: 10px;
  display: table;
  clear: both;
}
.Pantografi {display:inline-block;}

.Porte_chiuse {display:inline-block;}


#progressbar {
	height:100%;
	width:10%;
	background-color:red;
	}


#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 10%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}





 .ui-widget-header { 
            background: gray; 
            border: 1px solid black; 
        } 
		
		
		
		
		
		 .ui-widget-header {  
            background: blue;  
            border: 1px solid #DDDDDD;  
            color: #333333;  
            font-weight: bold;  
         }  
</style>




<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>

</head>
<body>

<h2>RealTime</h2>
<script>
//var users = <?php echo json_encode($Response_str); ?>;
//alert(users);
//document.write(users);
$(document).ready(function(){ 


	var n = $("#example div").length;

	if (1 < 2) {
	}
		//00ff00 lime color
		//Width = (int)(udpcom.Data["compow"] * 150);
		$(".Leva_tranzione_rect").css("background", "green");
		$(".Leva_tranzione_rect").css("width", "200px");
		$(".Leva_tranzione_rect").css("height", "20px");
		
		//.BackColor = System.Drawing.Color.Red;
		//FrenaturaElettrica.Width = (int)(udpcom.Data["combrkel"] * 150);
		$(".Frenatura_elettrica_rect").css("background", "green");
		$(".Frenatura_elettrica_rect").css("width", "200px");
		$(".Frenatura_elettrica_rect").css("height", "20px");
		
		
		//FrenoContinuo.BackColor = System.Drawing.Color.Red;
	//	FrenoContinuo.Width = (int)(udpcom.Data["combrk"] * 150);
		
		$(".Ferno_Continuo_rect").css("background", "green");
		$(".Ferno_Continuo_rect").css("width", "200px");
		$(".Ferno_Continuo_rect").css("height", "20px");
		
		//barFrenoDiretto.BackColor = System.Drawing.Color.Red;
		//FrenoDiretto.Width = (int)(udpcom.Data["combrkdir"] * 150);
		$(".Ferno_diretto_rect").css("background", "green");
		$(".Ferno_diretto_rect").css("width", "200px");
		$(".Ferno_diretto_rect").css("height", "20px");
		
		
		$(".Pantografi").css("background", "green");
		$(".Pantografi").css("width", "20px");
		$(".Pantografi").css("height", "20px");
		//
		var IR = <?php echo $ledIR; ?>;
		//var str = "<?php echo $ledIR ?>"; // "A string here"
    //alert(IR);
	  // alert("Hello! I am an alert box!!");
		//$ledIR = $byteArray[32]; //intexr32 m
        //$ledGS = $byteArray[31]; //interr 31 n
		if(IR==1)
		{
		$(".IR").css("background", "red");
		$(".IR").css("width", "20px");
		$(".IR").css("height", "20px");
		
		}
		
		else {
		$(".IR").css("background", "#FFFF00");
		$(".IR").css("width", "20px");
		$(".IR").css("height", "20px");
	}
		
		$(".GS").css("background", "green");
		$(".GS").css("width", "20px");
		$(".GS").css("height", "20px");
		
		$(".MIF").css("background", "green");
		$(".MIF").css("width", "20px");
		$(".MIF").css("height", "20px");
		
		$(".Ferno_staz").css("background", "green");
		$(".Ferno_staz").css("width", "20px");
		$(".Ferno_staz").css("height", "20px");
		
		$(".Porte_chiuse").css("background", "green");
		$(".Porte_chiuse").css("width", "20px");
		$(".Porte_chiuse").css("height", "20px");
		//ledTrazioneAuto.BackColor = udpcom.Data["apilot"] == 1 ? Color.Lime : Color.Silver;
		$(".Trazione_auto").css("background", "green");
		$(".Trazione_auto").css("width", "20px");
		$(".Trazione_auto").css("height", "20px");
		
		
		//lblConsumoInstantaneo.Text = Math.Round((double)udpcom.Data["tw"] / 1000).ToString();
		$(".Consumo_istantaneo").css("background", "green");
		$(".Consumo_istantaneo").css("width", "200px");
		$(".Consumo_istantaneo").css("height", "20px");
		
            //lblConsumoTotale.Text = Math.Round((decimal)udpcom.Data["kwh"], 2).ToString();
           
          $(".Consumo_totale").css("background", "green");
		$(".Consumo_totale").css("width", "200px");
		$(".Consumo_totale").css("height", "20px");
		

		/*
		 this.barComfort.BackColor = System.Drawing.Color.Red;
		   barComfort.Width = (int)Math.Round((decimal)(udpcom.Data["comf"] * 150 / 100));
			
            if ((int)udpcom.Data["comf"] > 70) 
			{
                barComfort.BackColor = Color.Lime;
            
			else if ((int)udpcom.Data["comf"] >= 40 && (int)udpcom.Data["comf"] <= 70) 
			{
                barComfort.BackColor = Color.Yellow;
            } else 
			{
                barComfort.BackColor = Color.Red;
            }
		
		**/
		$(".Confort_passeggeri").css("background", "green");
		$(".Confort_passeggeri").css("width", "200px");
		$(".Confort_passeggeri").css("height", "20px");
		
		//this.barAccelerazione.BackColor = System.Drawing.Color.Blue;
		// barAccelerazione.Left = (int)((udpcom.Data["acc"] - -1.5) / (1 - -1.5) * (300 - 152) + 152);
		
		$(".Accelerazione").css("background", "green");
		$(".Accelerazione").css("width", "200px");
		$(".Accelerazione").css("height", "20px");
            
	


});




</script>
 
    <div class ="container">
      <div class = "teal">
         <h2>Mobile First Design Demo</h2>
         <p>Resize the window to see the effect!</p>
      </div>
      
      <hr/> 
      <div class = "row">
	  <ul>
   <li><a class="active" href="Sessione.php">Sessione</a></li>
  <li><a href="Meteo.php">Meteo</a></li>
  <li><a class="active" href="#home">Script</a></li>
  <li><a href="Report.php">Report</a></li>
     <li><a href="Real_Recieve.php">RealTime</a></li>


  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">About</a></li>
</ul>
         <div class = "col m1 grey center">1</div>
         <div class = "col m1 center">2</div>
         <div class = "col m1 grey center">3</div>
         <div class = "col m1 center">4</div>
         <div class = "col m1 grey center">5</div>
         <div class = "col m1 center">6</div>
         <div class = "col m1 center grey">7</div>
         <div class = "col m1 center">8</div>
         <div class = "col m1 center grey">9</div>
         <div class = "col m1 center">10</div>
         <div class = "col m1 center grey">11</div>
         <div class = "col m1 center">12</div>
      </div>
      
      <div class = "row">
         <div class = "col s8 m4 l3 yellow">
            <p>This text will use 12 columns on a small screen, 4 on a medium screen (m4),
               and 3 on a large screen (l3).</p>
         </div>
         
         <div class = "col s4 m8 l9 grey">  
            <p>This text will use 4 columns on a small screen (s4), 8 on a medium screen
               (m8), and 9 on a large screen (l9).</p>
         </div>
      </div>
	  
	  
	  
	  <div class="row">
  <div class="column" style="background-color:#aaa;">
   <label>Leva tranzione:</label><br/>
<label>Frenatura elettrica:</label><br/>
<label>Ferno Continuo:</label><br/>
<label>Ferno diretto:</label><br/>

  </div>
  <div class="column" style="background-color:#bbb;">
     <div class="Leva_tranzione_rect"></div><br/>
   <div class="Frenatura_elettrica_rect"></div><br/>
   <div class="Ferno_Continuo_rect"></div><br/>
   <div class="Ferno_diretto_rect"></div><br/>
   
 
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
	<label>Pantografi:</label><br/>
   <label>IR:</label><br/>
<label>GS:</label><br/>
<label>MIF:</label><br/>
<label>Ferno staz:</label><br/>
<label>Porte chiuse:</label><br/>
<label>Trazione auto:</label><br/>
<br/><br/><br/>
  </div>
  <div class="column" style="background-color:#bbb;">
   <div class="Pantografi" ></div> <div class="Pantografi"></div><br/>
    <div class="IR"><div id="IR"></div></div><br/>
   <div class="GS"></div><br/>
   <div class="MIF"></div><br/>
   <div class="Ferno_staz"></div><br/>
   <div class="Porte_chiuse"></div> <div class="Porte_chiuse"></div><br/>
 <div class="Trazione_auto">  </div><br/><br/>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#aaa;">
   <label>Consumo istantaneo:</label><br/>
<label>Consumo  totale:</label><br/>
<label>Confort passeggeri:</label><br/>
<label>Accelerazione:</label><br/>
  </div>
  <div class="column" style="background-color:#bbb;">
     <div class="Consumo_istantaneo"></div><br/>
   <div class="Consumo_totale"></div><br/>
   <div class="Confort_passeggeri"></div><br/>
   <div class="Accelerazione"></div><br/>
  
  </div>
</div>

	  
	  
	  
	  
	  </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
</body>
</html>



