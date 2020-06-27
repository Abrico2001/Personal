 <?php
 
 //SESSIONE
 
		if(array_key_exists('PAUSA_SIMULATIONE', $_POST)) { 
			 PAUSA_SIMULATIONE(); 
		} 
		else if(array_key_exists('RIAVVIA_SIMULATIONE', $_POST)) { 
			RIAVVIA_SIMULATIONE(); 
		} 
		
		else if(array_key_exists('start_replay', $_POST)) { 
			listenFun(); 
		} 
		
		else if(array_key_exists('REGISTRA_DA_QUI ', $_POST)) 
 { 
			start_replay(); 
 } 
		
		function REGISTRA_DA_QUI() { 
			 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; PLAYBACK; 1";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
		} 
		
		function PAUSA_SIMULATIONE() 
		{ 
	$sock = socket_create(AF_INET, SOCK_DGRAM,0);
    $msg = "SIMURAIL; SIMCOM; PAUSE";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
		} 
		
		function RIAVVIA_SIMULATIONE() 
		{ 
	   $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; RESTART";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
		} 
		
		
		
			function start_replay() 
		{ 
	   $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; PLAYBACK; 1";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
		} 
		
		
			function stop_replay() 
		{ 
	   $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; PLAYBACK; 0";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
		} 
// close socket
	
	
	
	
	
	//OFF
	function SimulatoreSpegniRiavvia() 
		{ 
	   $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; QUIT";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
		} 
	?> 

	
	
	
	
	
	
	
	
	
	
	

	
	
	
	<?php
		// for snow  neve

	
	
	 if(array_key_exists('nebbia_no', $_POST)) 
		{ 
	nebbia_no();
       }
		
		 else if(array_key_exists('nebbia_minima', $_POST)) 
		{ 
	nebbia_minima();
       }
	   
	   
		 else if(array_key_exists('nebbia_media', $_POST)) 
		{ 
	nebbia_media();
       }
	
	
	else if(array_key_exists('nebbia_fitta', $_POST)) 
		{ 
     nebbia_fitta();
       }
	   
		function nebbia_no() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; FOG; 0";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function nebbia_minima() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; FOG; 0.85";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		
		function nebbia_media() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; FOG; 0.9";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function nebbia_fitta() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; FOG; 1";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
	?>
	<?php
		// for METEO rain

	
	
	 if(array_key_exists('pioggia_no', $_POST)) 
		{ 
	pioggia_no();
       }
		
		 else if(array_key_exists('pioggia_leggera', $_POST)) 
		{ 
	pioggia_leggera();
       }
	   
	   
		 else if(array_key_exists('pioggia_media', $_POST)) 
		{ 
	pioggia_media();
       }
	
	
	else if(array_key_exists('pioggia_intesta', $_POST)) 
		{ 
	pioggia_intesta();
       }
	   
		function pioggia_no() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; RAIN; 0";
	
	$date = date('d-m-yy h:i:s');
     echo $date;
 echo "pioggia: 0%.";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function pioggia_leggera() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; RAIN; 0.3";
		
	$date = date('d-m-yy h:i:s');
     echo $date;
 echo "pioggia: 90%.";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		
		function pioggia_media() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; RAIN; 0.6";
	$date = date('d-m-yy h:i:s');
     echo $date;
 echo "pioggia: 90%.";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function pioggia_intesta() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; RAIN; 1";
	$date = date('d-m-yy h:i:s');
     echo $date;
 echo "pioggia: 90%.";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
	?>

 
 	<?php
		// for snow  neve

	
	
	 if(array_key_exists('neve_no', $_POST)) 
		{ 
	neve_no();
       }
		
		 else if(array_key_exists('neve_leggera', $_POST)) 
		{ 
	neve_leggera();
       }
	   
	   
		 else if(array_key_exists('neve_media', $_POST)) 
		{ 
	neve_media();
       }
	
	
	else if(array_key_exists('neve_intesta', $_POST)) 
		{ 
     neve_intesta();
       }
	   
		function neve_no() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; NEVE; 0";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function neve_leggera() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; NEVE; 0.3";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		
		function neve_media() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; NEVE; 0.6";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function neve_intesta() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; NEVE; 1";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
	?>
	
	
	
	<?php
		// for aderenza ADERENZA

	
	
	 if(array_key_exists('aderenza_ottima', $_POST)) 
		{ 
	aderenza_ottima();
       }
		
		 else if(array_key_exists('aderenza_umido', $_POST)) 
		{ 
	aderenza_umido();
       }
	   
	   
		 else if(array_key_exists('aderenza_bagnato', $_POST)) 
		{ 
	aderenza_bagnato();
       }

	
	else if(array_key_exists('aderenza_ghiaccio', $_POST)) 
		{ 
     aderenza_ghiaccio();
       }
	   
		function aderenza_ottima() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; MURAIL; 0.8";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function aderenza_umido() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; MURAIL; 0.7";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		
		function aderenza_bagnato() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; MURAIL; 0.5";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		function aderenza_ghiaccio() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; MURAIL; 0.2";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
	?>
	
 	<?php
		// for light
		if(array_key_exists('luce_on', $_POST)) 
		{ 
	luce_on();
       }
		
		 else if(array_key_exists('luce_off', $_POST)) 
		{ 
	luce_off();
       }
	   
	   
	   
		function luce_on() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; LIGHT; 1";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
				function luce_off() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; LIGHT; 0";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
?>

<?php
		// for light
		if(array_key_exists('glow_on', $_POST)) 
		{ 
	glow_on();
       }
		
		 else if(array_key_exists('glow_off', $_POST)) 
		{ 
glow_off();
       }
	   
	   
	   
		function glow_on() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; GLOW; 0";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
				function glow_off() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; GLOW; 0";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
?>
 <html>
   <head>
      <title>SimuRAIL D&T </title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
	  
	  

   </head>
   
   <body style="background-color:powderblue;">   
   
  
 <div class="container #fafafa grey lighten-5">
			
			
			 <a href="#"><img class="responsive-img" src="shrail_pages.png"></a>
		<div class="row"><h1 style="color:green;"> 
     Postazione Istruttore
	</h1>  </div>	 
 	

 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Sessione</a></li>
        <li class="tab col s3"><a  href="#test2">Meteo</a></li>
         <li class="tab col s3"><a  href="#test3">Script</a></li>
        <li class="tab col s3"><a href="#test4">Anomalie</a></li>
		   <li class="tab col s3"><a href="#test5">Report</a></li>
		      <li class="tab col s3"><a href="#test6">RealTime</a></li>
      </ul>
    </div>
	</div>
	<div class="row">
	
    <div id="test1" class="col s12">
	
	<div  class="row">
	  <div class="col s4">
	
	<form method="post"> 
		<input type="submit" name="PAUSA SIMULATIONE"
		class="button" value="PAUSA SIMULATIONE"  class="input-field col s6"  /> </br>
		<input type="submit" name="RIAVVIA SIMULATIONE" class="button" value="RIAVVIA SIMULATIONE" /> </br>
		
		
	</form> 
		</div>
	  <div class="col s4">
	<form method="post"> 
	
		<input type="submit" name="REGISTRA DA QUI" class="button" value="REGISTRA DA QUI" /> </br>
		<input type="submit" name="Start Replay" class="button" value="START REPLAY" /> 
		
	</form> 
</div>
	
	</div>
	
	
	
	
	
		<div  class="row">
	  <div class="col s4 " style="background-color: #F0E68C;">
	
	<form method="post"> 
		<input type="submit" name="SPEGNI SIMULATORE" class="button" value="SPEGNI SIMULATORE"  class="input-field col s6"  />
		<input type="submit" name="RIAVVIA_SIMULATORE" class="button" value="RIAVVIA SIMULATORE" /> </br>
		
	</form> 
		</div>
	
	<div class="row">
	
	 <form  method="post"class = "col s12">  
            <div class = "row">  
               <div class = "input-field col s6">  
                  
                 
		
				  
				  ALLIEVO: <input type="text" name="ALLIEVO"><br>

				  
				  
				  
				  
     			  
               </div>  
               
            </div>  
         
		  <div class = "row">  
               <div class = "input-field col s6">  
                
                 
ISTRUTTORE: <input type="text" name="ISTRUTTORE"><br>
               </div>  
               
            </div>  
            
			
			<div class = "row">  
               <div class = "input-field col s6">  
                 
				  
				  
				  SESSIONE: <input type="text" name="SESSIONE"><br>

				   <input type="submit">  
               </div>  
               
            </div> 
           
              
            <div class = "row">  
               <div class = "input-field col s12">  
                 
                  <p>  
                     <input id = "Azioni_istruttore" type = "checkbox" checked = "checked" />  
                     <label for = "Azioni_istruttore">Azioni istruttore</label>  
                  </p>  
                   
				   
				   
				   <p>  
                     <input id = "Azioni_macchinista" type = "checkbox" checked = "checked" />  
                     <label for = "Azioni_macchinista">Azioni macchinista</label>  
                  </p>  
				    <p>  
                     <input id = "Eventi_SCMT" type = "checkbox" checked = "checked" />  
                     <label for = "Eventi_SCMT">Eventi SCMT</label>  
                  </p> 
				  <p>  
                     <input id = "Azioni_SCMT" type = "checkbox" checked = "checked" />  
                     <label for = "Azioni_SCMT">Azioni SCMT</label>  
                  </p> 
				  
				  
				 
				  <p>  
                     <input id = "Passaggio_ente" type = "checkbox" checked = "checked" />  
                     <label for = "Passaggio_ente">Passaggio ente</label>  
                  </p> 
               </div>  
            </div>  
                     
         </form>  
	
	</div>
	
	
	
	</div>
	

	
	</div>
	</div>
	
	 
	<div class="row">
	<div id="test2" class="col s12">
	
	<div class="row">
	
	 <form method="post">
	  NEBBIA:
		<input type="submit" name="nebbia_no"
		class="button" value=" NO"  class="input-field"  /> 
	
	 
		<input type="submit" name="nebbia_minima"
		class="button" value="MINIMA"  class="input-field"  /> 
	 
		<input type="submit" name="nebbia_media"
		class="button" value="MEDIA"  class="input-field"  /> 
	
		<input type="submit" name="nebbia_fitta"
		class="button" value="FITTA"  class="input-field"  /> 
	</form> 
  </div>
 
   <div class="row">
	<form method="post"> 
	  PIOGGIA:
		<input type="submit" name="pioggia_no"
		class="button" value=" NO"  class="input-field"  /> 
	
		<input type="submit" name="pioggia_leggera"
		class="button" value=" LEGGERA"  class="input-field"  /> 
	
		<input type="submit" name="pioggia_media"
		class="button" value="MEDIA"  class="input-field"  /> 
	
		<input type="submit" name="pioggia_intesta"
		class="button" value="INTENSA"  class="input-field"  /> 
	</form>
		</div>
  
    <div class="row">
	
	 <form method="post"> 
	 NEVE:
		<input type="submit" name="neve_no"
		class="button" value=" NO"  class="input-field"  /> 
	
		<input type="submit" name="neve_leggera"
		class="button" value=" LEGGERA"  class="input-field"  /> 
	
		<input type="submit" name="neve_media"
		class="button" value="MEDIA"  class="input-field"  /> 

		<input type="submit" name="neve_intesta"
		class="button" value="INTENSA"  class="input-field"  /> 
	</form>
		</div>
 
  
   <div class="row">
  
   <form method="post"> 
   
   ADERENZA:
		<input type="submit" name="aderenza_ottima"
		class="button" value="OTTIMA"  class="input-field"  /> 

		<input type="submit" name="aderenza_umido"
		class="button" value="UMIDO"  class="input-field"  /> 
		<input type="submit" name="aderenza_bagnato"
		class="button" value=" BAGNATO"  class="input-field"  /> 
	
		<input type="submit" name="aderenza_ghiaccio"
		class="button" value="GHIACCIO"  class="input-field"  /> 
	</form>
  
   </div>
   

   
  
    <div class="row">
	
	<form action="get_Report.php" method="post"> 
	   STAGIONE:
		<input type="submit" name=" PRIMAVERA"
		class="button" value="PRIMAVERA"  class="input-field"  /> 
		<input type="submit" name="ESTATE"
		class="button" value="ESTATE"  class="input-field"  /> 
		<input type="submit" name="AUTUNNO"
		class="button" value=" AUTUNNO"  class="input-field"  /> 
		<input type="submit" name="IVERNO"
		class="button" value="IVERNO"  class="input-field"  /> 
		
		</form></div>
		
		
		  <div class="row">
	
	<form action="get_Report.php" method="post"> 
		ORA:  
		<input type="submit" name="NOTTE"
		class="button" value="NOTTE"  class="input-field"/> 
		<input type="submit" name="8:00"
		class="button" value="8:00"  class="input-field"  /> 
		<input type="submit" name="12:00"
		class="button" value="12:00"  class="input-field"  /> 
		
		<input type="submit" name="18:00"
		class="button" value="18:00"  class="input-field"  /> 
	</form></div>

	
	
	   <div class="row">
	   <form method="post"> 
	   
	   LUCE:
	 
		<input type="submit" name="luce_on"
		class="button" value="ON"  class="input-field"  /> 
		<input type="submit" name="luce_off"
		class="button" value="OFF"  class="input-field"  /> 
	</form>
	   
	   </div>
    <div class="row">
	
	<form method="post"> 
	ABBAGLIA:
 
		<input type="submit" name="ON"
		class="button" value="ON"  class="input-field"  /> 
		<input type="submit" name="OFF"
		class="button" value="OFF"  class="input-field"  /> 
	</form>
	
	</div>
	

	
	
	</div>
	
	</div>
	
	<div class="row">
	<div id="test3" class="col s12  card-panel white lighten-2">
	<div class="row">
	<form action="DandT.php"  method="post" enctype="multipart/form-data">
   <label for="file">Filename:</label> <input type="file" name="file" id="file"/>
<input type="submit" value="Submit">
</form>
	</div>
	<div class="row">
	
	<?php
     
//$contents = file_get_contents($_FILES['file']['tmp_name']);
//preg_match_all("/\\[(.*?)\\]/", $contents, $matches); 
//echo $matches[1][0];
//print_r($matches[0]);


 if(isset($_FILES['file'])){
    $image= file_get_contents($_FILES['file']['tmp_name']);
	preg_match_all("/\\[(.*?)\\]/",$image, $matches); 
	print_r($matches[0])."<br/>"; ;
}

     
    ?> 
	</div>
	</div>
	</div>
	<div class="row"> <div id="test4" class="col s12">Anomalie</div></div>
	<div class="row"> 
	<div id="test5" class="col s12"> 
        
------------------------------</br>
------------------------------</br>
    SHRail, a D&T division</br>
            -----</br>
     RAPPORTO DI SESSIONE</br>
	  <?php
      
        if(isset($_POST['ALLIEVO'])) { 
            echo "ALLIEVO:".$_POST["ALLIEVO"]."<br/>"; 
        } 
		
		 if(isset($_POST['ISTRUTTORE'])) { 
            echo "ISTRUTTORE:".$_POST["ISTRUTTORE"]."<br/>"; 
        } 
       
		 if(isset($_POST['SESSIONE'])) { 
            echo "SESSIONE:".$_POST["SESSIONE"]."<br/>"; 
        } 
    ?> 
	 	<?php
	 if(array_key_exists('pioggia_no', $_POST)) 
		{ 
	pioggia_no();
       }
		
		 else if(array_key_exists('pioggia_leggera', $_POST)) 
		{ 
	pioggia_leggera();
       }
	   
	   
		 else if(array_key_exists('pioggia_media', $_POST)) 
		{ 
	pioggia_media();
       }
	
	
	else if(array_key_exists('pioggia_intesta', $_POST)) 
		{ 
	pioggia_intesta();
       }
  ?>
      </div>
	  </div>
	<div class="row"><div id="test6" class="col s12">
	
	
	
	  <?php

//reading information from SHRail

		  
$sock = socket_create(AF_INET, SOCK_DGRAM, 0);
socket_bind($sock, '127.0.0.1', 2500);

$remote_ip = '127.0.0.1';
$remote_port =2500;
$r = socket_recvfrom($sock, $buf, 2048, 0, $remote_ip, $remote_port);
//Convert to array of decimal values
$array = unpack("c*chars", $buf);


$indexes = array("num", "kmh", "acc", "tw", "poweron", "compowtot", "combrktot", "comdirec", "comlat", "cmdlight", "cmdscambio", "cmdstop", "cmdfrecce", "pbrake", "pvacuum", "cmdsand", "cmdopen0", "cmdwipe", "cmdpanto", "panto", "aopen0", "aopen1", "aopen2", "cmdopen1", "cmdopen2", "comlower", "thermalon", "frecce", "apilot", "apilotkmh", "interr", "intexr", "combrksta", "combrk", "compow", "kwh", "comf", "combrkel", "combrkdir", "pbrakedir", "brakex", "trazionen", "combrkini", "combrkmif", "brakexel", "trtimesec", "combrkperd1", "combrkperd2", "pantoerr"); 


 // hex2bin("4a3") just broke. Now what?

// Using sprintf() to get it right.
function bin2hex2($str11) 
{
    $hex = "";
    $i = 0;
    do {
        $hex .= sprintf("%02x", ord($str11{$i}));
        $i++;
    } while ($i < strlen($str11)-24);
    return $hex;
}
// echo bin2hex2($buf);
//$byteArray = unpack('C*', 'Some string');

 error_reporting(-1);
ini_set('display_errors', true);

function create_byte_array($string)
{
    $array = array();
    foreach(str_split($string) as $char){
        array_push($array, sprintf("%02X", ord($char)));
    }
    return implode(' ', $array);
}

//echo create_byte_array($buf);
 $new_string;
$str = implode(array_map('chr', $array));
$abc = substr($str, 0, 8);
$abcd = substr($str, 0, 15);
 echo "this the string davide".$abc, "\n";
 echo "this the string davide2".$abc, "\n";

 $lenbuf= strlen($buf);
$byteArray = unpack("N", $buf);

$fixedArray = SplFixedArray::fromArray($byteArray);

foreach($fixedArray as $value) {
	//$str_arr = explode (";", $value);  
  //  echo "hello". $value, "\n";
}

$hex_ary = array();
foreach (str_split($buf) as $chr) 
{
    $hex_ary[] = sprintf("%02X", ord($chr));
}
for ($x = 0; $x <= 48; $x++) 
 {
   $hex_ary[$x] = sprintf("%02X", ord($chr),$x*4);
 //  echo $hex_ary[$x]; 
   
  //echo  var_dump(unpack('f', pack('i', $hex_ary[$x])));
}
//echo "hello abrico" .implode(' ',$hex_ary);


echo $abc ;
echo $abcd ;
 $len1 = ob_get_length();
 echo $lenbuf;
 
 
if(substr($str, 0, 8) == 'SR_TRM01')
		{
			$byteArray1 = unpack("N*",$buf); 
			//echo "hello abrico2222222222" ; 
	//	print_r($byteArray1); 
		for($n = 0; $n <=48; $n++)
		{ 

	$fl = var_dump(unpack('f', pack('i', $byteArray1)));
		 
		   //echo  $fl[$n] . "<br/>";
		 //  print_r( $fl[$n] . "<br/>");
		// print_r("float value" .$fl);
		//echo   var_dump( $fl[$n]);
//echo $fl;


		}
	
			$byteArray = unpack("N", $buf);
			//$xx = var_dump(unpack('f', pack('i', SplFixedArray($lenbuf-24))));
		
		
		 
		 
		}
//reading information from the simulator


elseif(substr($str, 0, 15) == 'SIMURAIL; VEHI;')
  {
	   $iparr = preg_split ("/\;/", $str); 
	   $new_string=trim($iparr[2]);
	   $new_string2=trim($iparr[3]);
	   $float4  = floatval($iparr[4]);
	   $float5  = floatval($iparr[5]);
	   $float6  = floatval($iparr[6]);
	   $intval7  = intval($iparr[7]);
	   $float8  = floatval($iparr[8]);
	   $new_string9=trim($iparr[9]);
	   $float10  = floatval($iparr[10]);
		
		 echo "String value".$new_string."<br/>";
		 echo  "String value n/A" .$new_string2."<br/>";
		 echo "volecity:" .$float4."<br/>";
		 echo "potential:" .$float5."<br/>";
		 echo $float6."<br/>";
	    echo $intval7."<br/>";
		echo $float8."<br/>";
		echo $new_string9."</br>";
		echo $float10."</br>";
echo (substr($str, 0, 15));

            
  }



  
?>
	</div> </div>

   <footer class = "page-footer  white lighten-1">  
         <div class = "row">  
            <div class = "col s12 m6 l6">  
             
            </div>  
              
            <div class = "col">  
               <ul>  
                  <li><a href = "#" class = "black-text text-lighten-4 right">  
                     D&T S.R.L.</a></li>  
                  <li><a href = "#" class = "black-text text-lighten-4 right">  
                   Largo Promessi Sposi, 4.</a></li>  
                  <li><a href = "#" class = "black-text text-lighten-4 right">  
                  CONTACT US<br>
Office: +390289500080<br>
Mobile: +393486979791<br>
Email: dt.marketing@databtech.net	</a></li> 



				 
               </ul>  
            </div>  
         </div>  
           
         <div class = "footer-copyright">  
            <div class = "container">  
               ? 2020 Copyright Information  
               <a class = "grey-text text-lighten-4 right" href = "#!">Links</a>  
            </div>  
         </div>           
       </footer>  
</div>
		
 
</body> 

</html>