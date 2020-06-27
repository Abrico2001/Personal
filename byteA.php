

<?php

session_start();
require 'Main.php';

//include("file1.php");
class ClassB {

   public $x;

    public function callbyteF(){
        $a = new Fruit();
        return $a-> byteArrayResult();
    }

    

  public function oneshotStringB(){
        $a = new Fruit();
        return $a-> oneshotString();
    }




}

$b = new ClassB();
//while(true)
$y= $b->oneshotStringB();
	   $float10  = floatval($y[10]);
echo $float10;
$x=$b->callbyteF();
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

<!DOCTYPE html>
<html
<body>
   <head>
   <title>SimuRAIL D&T </title>
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
<script>
var IR = <?php echo $ledIR; ?>;
$(document).ready(function(){ 


	//var n = $("#example div").length;

	if (1 < 2) {
	}
		//00ff00 lime color
		var xx=<?php echo $compowx; ?>;
		var yy=0;
		//Width = (int)(udpcom.Data["compow"] * 150);
		$(".Leva_tranzione_rect").css("background", "#FFFF00");
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
			///
		////
		

		if(<?php echo $ledIR; ?>==1)
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
		if(<?php echo $ledGS;?> ==1)
		{
		$(".GS").css("background", "green");
		$(".GS").css("width", "20px");
		$(".GS").css("height", "20px");
		}
		else
		{
		$(".GS").css("background", "red");
		$(".GS").css("width", "20px");
		$(".GS").css("height", "20px");
		}
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
 
    <div class ="container" >
	<div id="a">
      <div class = "teal">
       <p>Postazione Istruttore</p>
      </div>
      
      <hr/> 
      <div class = "row">
	  <ul>
   <li><a class="active" href="Sessione.php">Sessione</a></li>
  <li><a href="Meteo.php">Meteo</a></li>
   <li><a class="active" href="Script.php">Script</a></li>

  <li><a href="Report.php">Report</a></li>
     <li><a href="byteA_String_Ajax.php">RealTime</a></li>


  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">About</a></li>
</ul>

	  
	  
	  <div class="row">
  <div class="column">
   <label>Leva tranzione:</label><br/>
<label>Frenatura elettrica:</label><br/>
<label>Ferno Continuo:</label><br/>
<label>Ferno diretto:</label><br/>

  </div>
  <div class="column">
     <div class="Leva_tranzione_rect"></div><br/>
   <div class="Frenatura_elettrica_rect"></div><br/>
   <div class="Ferno_Continuo_rect"></div><br/>
   <div class="Ferno_diretto_rect"></div><br/>
   
 
  </div>
</div>
<div class="row">
  <div class="column">
	<label>Pantografi:</label><br/>
   <label>IR:</label><br/>
<label>GS:</label><br/>
<label>MIF:</label><br/>
<label>Ferno staz:</label><br/>
<label>Porte chiuse:</label><br/>
<label>Trazione auto:</label><br/>
<br/><br/><br/>
  </div>
  <div class="column">
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
  <div class="column">
   <label>Consumo istantaneo:</label><br/>
<label>Consumo  totale:</label><br/>
<label>Confort passeggeri:</label><br/>
<label>Accelerazione:</label><br/>
  </div>
  <div class="column">
     <div class="Consumo_istantaneo"></div><br/>
   <div class="Consumo_totale"></div><br/>
   <div class="Confort_passeggeri"></div><br/>
   <div class="Accelerazione"></div><br/>
  
  </div>
</div>

	  
	  
	  
	  
	  </div>
   	  </div>
</body>
</html>



