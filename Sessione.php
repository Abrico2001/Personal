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
   </body>
</html>