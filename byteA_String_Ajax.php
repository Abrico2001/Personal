
<!DOCTYPE html>
<html>
   <head>
     <title>SimuRAIL D&T </title>

      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 


  
            <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
   <style>
   
   
 

.light1
{
width: 5%;
height: auto;
padding-top: 5%;
background: #ef8913;
}
.light2
{
width: 5%;
height: auto;
padding-top: 5%;
background: #ef8913;
}
.light3
{
width: 5%;
height: auto;
padding-top: 5%;
background: #ef8913;
}


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

li a:hover:not(.active) 
{
  background-color: #111;
}

.active 
{
  background-color: #4CAF50;
}
   </style>



</head>



        

 <script>	
/* 
 
 var myVariable;
var return_first;

function callback(response) 
{
 // return_first = response;
 // console.log(return_first);
 // for (var index in return_first) 
//{
  
 // document.write( index+":abrico:"+return_first[index] );
 document.write("hello hi");
//}


if( IR=1)
{
	 document.write("hello hi");
}
  //use return_first variable here
  
}

for (var index in return_first) 
{
  
 // alert( index+":abrico:"+return_first[index] );
}


var x;
var IR;
$(window).load(function(){
    update()
    setInterval(function(){
        update()
    }, 1000)
})

function update()
{
    $.ajax({
	 'async': false,
      datatype:'text',
      url: 'byteAphp.php',
	 type:'post',
        success:function(data)
		{
            //Loop through each location.
			
			return_first = data;
			  $('#listposts').html(return_first);
			for (var index in return_first) 
{
IR=return_first[32];

 // alert( index+":abrico:"+return_first[index] );
}



	//document.write(return_first[32]);

	//	console.log(data);
          // 	callback(data);
        }
    })
	//console.log(IR);
}
 

	//console.log(IR);
	*/

/*























$(document).ready(function(){
var marker;
 $.ajax({
	     'async': true,
    url:'byteAphp.php',
    type:'post',
    dataType: "json",
    success:function(data)
	{
		
		
		if(data.success == true)
		{ // if true (1)
      setTimeout(function()
	  {// wait for 5 secs(2)
          callback(data);
      }, 10); 
   }
		
	
    }

})
});
*/


var IR;
var GS;
var MIF;
var cmdopen1;
var cmdopen2;
var return_first;
var arr=[];
var kmh;
  $(function() 
		{
            startRefresh();
        });
		
        function startRefresh() 
		{
            setTimeout(startRefresh,1000);
           $.ajax({
       async: true,
        url: 'byteAphp.php',
         data: 'id=testdata',
            dataType: 'json',
            cache: false,
        success : function(data)
		{
			
			return_first = data;



for (var index in return_first) 
{

// return_first[index];
// document.write( index+":"+return_first[index] +"<br/> ");
 
}
IR=return_first[32];
GS=return_first[31];
MIF=return_first[44];
cmdopen1=return_first[24];
cmdopen2=return_first[25];
//alert(IR);
		//$('#listposts').html(return_first);
        
		 kmh=return_first[2];
		
		
		
		//00ff00 lime color
		
		var yy=0;
		//Width = (int)(udpcom.Data["compow"] * 150);
		$(".Leva_tranzione_rect").css("background", "#FFFF00");
		$(".Leva_tranzione_rect").css("width", "200px");
		$(".Leva_tranzione_rect").css("height", "20px");
		
		//.BackColor = System.Drawing.Color.Red;
		//FrenaturaElettrica.Width = (int)(udpcom.Data["combrkel"] * 150);
		$(".Frenatura_elettrica_rect").css("background", "red");
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
		
//ledIR 1 = Silver   #C0C0C0	
//ledIR 0 = lime     #00ff00
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
	
	//ledGS 1 = Silver   interr
//ledGS 0 = lime
	
		if(GS==1)
		{
		$(".GS").css("background", "#C0C0C0");
		$(".GS").css("width", "20px");
		$(".GS").css("height", "20px");
		}
		else
		{
		$(".GS").css("background", "#00ff00");
		$(".GS").css("width", "20px");
		$(".GS").css("height", "20px");
		}
		
			
          //ledMIF 1 = lime    combrkmif
		//ledMIF  0 = Silver
		if(MIF==1)
		{
		$(".MIF").css("background", "#00ff00");
		$(".MIF").css("width", "20px");
		$(".MIF").css("height", "20px");
		}
		else
		{
		$(".MIF").css("background", "#C0C0C0");
		$(".MIF").css("width", "20px");
		$(".MIF").css("height", "20px");
		}
		
		$(".Ferno_staz").css("background", "green");
		$(".Ferno_staz").css("width", "20px");
		$(".Ferno_staz").css("height", "20px");
		
		
			//Porte_chiuse 1 = Silver
             //Porte_chiuse 0 = lime
		    // ledPorteChiuseSX.BackColor = udpcom.Data["cmdopen1"] == 1 ? Color.Silver : Color.Lime;
            // ledPorteChiuseDX.BackColor = udpcom.Data["cmdopen2"] == 1 ? Color.Silver : Color.Lime;
			
		//	23=cmdopen1=0
          if(cmdopen1==1)
		  {
		$(".Porte_chiuseXX").css("background", "#C0C0C0");
		$(".Porte_chiuseXX").css("width", "20px");
		$(".Porte_chiuseXX").css("height", "20px");
		  }
		  else
		  {
			  $(".Porte_chiuseXX").css("background", "#00ff00");
		$(".Porte_chiuseXX").css("width", "20px");
		$(".Porte_chiuseXX").css("height", "20px");
			  
		  }
		
		
		
		if(cmdopen2==1)
		{
		$(".Porte_chiuseYY").css("background", "#C0C0C0");
		$(".Porte_chiuseYY").css("width", "20px");
		$(".Porte_chiuseYY").css("height", "20px");
		}
		else
		{
		$(".Porte_chiuseYY").css("background", "#00ff00");
		$(".Porte_chiuseYY").css("width", "20px");
		$(".Porte_chiuseYY").css("height", "20px");	
		}
			
		
		//ledTrazioneAuto.BackColor = udpcom.Data["apilot"] == 1 ? Color.Lime : Color.Silver;
		$(".Trazione_auto").css("background", "#00ff00");
		$(".Trazione_auto").css("width", "20px");
		$(".Trazione_auto").css("height", "20px");
		
		
		//lblConsumoInstantaneo.Text = Math.Round((double)udpcom.Data["tw"] / 1000).ToString();
		
			//$('#listposts').html(return_first);
			$('.Consumo_istantaneo').html(return_first[4]/1000 );
		$(".Consumo_istantaneo").css("background", "");
		$(".Consumo_istantaneo").css("width", "200px");
		$(".Consumo_istantaneo").css("height", "20px");
		
            //lblConsumoTotale.Text = Math.Round((decimal)udpcom.Data["kwh"], 2).ToString();
          // 36
		  var n = return_first[36].toFixed(2);
	 $('.Consumo_totale').html( n);
		

          $(".Consumo_totale").css("background", "");
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
            
		
		},
    });
	
        }
			//document.write(return_first);


var charAtfound;
var lengthofstr;
var return_first2;
var limitvolecity;

var DistanzaSegnale ;
var Progressiva;
  $(function() 
		{
            startRefresh2();
        });
        function startRefresh2() {
            setTimeout(startRefresh2,1000);
			
			
           $.ajax({
       async: true,
        url: 'byteAString.php',
         response: 'id=testdata',
            dataType: 'json',
            cache: false,
        success : function(response)
		{
			//console.log(response);
			
			return_first2=response;
			
			for (var i in return_first2) 
{
//document.write(i+":"+return_first2[i]+"<br/> ");
	// $('#listposts2').html(i+":"+return_first2[i]+"<br/> ");
}	

limitvolecity=return_first2[10];
DistanzaSegnale=return_first2[8];
Progressiva  =return_first2[6];
//alert("kmh:"+kmh);
			//document.write(data);
 //$('#listposts2').html(response);
 
// progr






 // Vehicle.Progressiva = float.Parse(valori[6], CultureInfo.InvariantCulture.NumberFormat);
                  //      Vehicle.CodiceRSC = int.Parse(valori[7]);
                   //     Vehicle.DistanzaSegnale = float.Parse(valori[8], CultureInfo.InvariantCulture.NumberFormat);
                   //     Vehicle.StatoSegnale = valori[9].Trim();
                   //     Vehicle.LimiteVelocita = float.Parse(valori[10], CultureInfo.InvariantCulture.NumberFormat);


 //lblProgressiva.Text = Math.Round(udpcom.Vehicle.Progressiva).ToString();
			
          //  lblProssimoSegnale.Text = Math.Round(udpcom.Vehicle.DistanzaSegnale).ToString();

// $float5  = floatval($iparr[5]);
//	   $float6  = floatval($iparr[6]);//
	  // $intval7  = intval($iparr[7]);
	  // $float8  = floatval($iparr[8]);//
	  // $new_string9=trim($iparr[9]);
	  // $float10  = floatval($iparr[10]);














$('.speed').html(kmh.toFixed(0)+"/"+return_first2[10]+"km/h");
 $(".progr").css("background", "");
 $('.progr').html(return_first2[6]);
 $(".progr").css("background", "");
 
 
 
 $('.DistanzaSegnale').html(DistanzaSegnale);

 
var stringx=return_first2[9].trim();

lengthofstr=stringx.length;

charAtfound= stringx.charAt(0);

//  alert(charAtfound);
 if(lengthofstr>3)
 {
	 switch (charAtfound)
	 { 
  case '0':
  
  $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
    $(".light3").css("border-radius", "50%");
	
		$(".light1").css("background", "black");
		$(".light2").css("background", "black");
		$(".light3").css("background", "black");
	break;
	 case '1':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	
	 case '2':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "black");
   $(".light2").css("background", "black");
   $(".light3").css("background", "yellow");
	break;
	 case '3':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "green");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	
	
	 case '4':  case '5':  case '6':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "black");
   $(".light2").css("background", "black");
   $(".light3").css("background", "black");
	break;
  //  day = "Sunday";
 //   break;
 // case 1:
   // day = "Monday";
}
  
  
  
  
  
 switch( stringx.charAt(1))
 {
	  case '1':
  
  $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
    $(".light3").css("border-radius", "50%");
	
		$(".light1").css("background", "black");
		$(".light2").css("background", "black");
		$(".light3").css("background", "black");
	break;
	 case '0':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	
	 case '2':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	 case '3':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	
	
	 case '4':  case '5':  case '6':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
 }
 
 
 
  
 switch( stringx.charAt(2))
 {
	  case '1':
  
  $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
    $(".light3").css("border-radius", "50%");
	
		$(".light1").css("background", "black");
		$(".light2").css("background", "black");
		$(".light3").css("background", "black");
	break;
	 case '0':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	
	 case '2':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	 case '3':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
	
	
	  case '4':  
	  case '5': 
	 case '6':
   $(".light1").css("border-radius", "50%");
   $(".light2").css("border-radius", "50%");
   $(".light3").css("border-radius", "50%");
   
   $(".light1").css("background", "red");
   $(".light2").css("background", "red");
   $(".light3").css("background", "red");
	break;
 }
 }
 
 else
 {
	 
 }
 
        },
    });
        }
//alert("limit:"+limitvolecity);
 /*
var previousValue = null;
 var update = function()
 {
     $.ajax({
       async: false,
        url: 'byteAphp.php',
         data: 'id=testdata',
            dataType: 'text',
            cache: false,
        success : function(data){
			
			console.log(data);

           // $('#listposts').append(data+"</br>");
        },
    });
};
update();
var refInterval = window.setTimeout('update()', 200);
*/

//setTimeout(function(){
  // window.location.reload(1);
//}, 5000);
/*
setInterval(function(){
$.get( "byteAphp.php", function( data ) {
	callback(data);
  //do something with the returned data. Maybe update a table or something
});
}, 3000);

*/



/*
function startRefresh() {
    $.get('byteAphp.php', function(data) {
        callback(data);
    });
}
$(function() {
    setTimeout(startRefresh,5000);
});

*/
//alert(kmh);
</script>



<body>

 <div class ="container" style="">
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
        
	
	
	  </div>  
	  <div class="row">
<div id="listposts">
</div>
 <div id="listposts2">
</div>

<div class ="speed">
  </div>



<div class ="Progressiva">
  </div>

<div class ="DistanzaSegnale">
  </div>
<div class ="progr">
  </div>
<div class ="light1">
  </div>
   <div class ="light2">
  </div>
   <div class ="light3">
   
  </div>


  </div>



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
  </div>
  <div class="column">
   <div class="Pantografi" ></div> <div class="Pantografi"></div><br/>
    <div class="IR"><div id="IR"></div></div><br/>
   <div class="GS"></div><br/>
   <div class="MIF"></div><br/>
   <div class="Ferno_staz"></div><br/>
   <div class="Porte_chiuseXX">xx</div>&#160;
<div class="Porte_chiuseYY">yy</div><br/>
 <div class="Trazione_auto">  </div><br/><br/>
  </div>
</div>

<br/><br/><br/><br/>

<div class="row">
  <div class="column">
   <label>Consumo istantaneo:</label><br/>
<label>Consumo  totale:</label><br/><br/><br/>
<label>Confort passeggeri:</label><br/><br/>
<label>Accelerazione:</label>
  </div>
  <div class="column">
     <div class="Consumo_istantaneo"></div><br/>
   <div class="Consumo_totale"></div><br/>
   <div class="Confort_passeggeri"></div><br/>
   <div class="Accelerazione"></div><br/>
  </div>
</div>
</div>


</body>
</html>