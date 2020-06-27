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











<?php
		// for light
		if(array_key_exists('NOTTE', $_POST)) 
		{ 
	NOTTE();
       }
		
		 else if(array_key_exists('egight_8', $_POST)) 
		{ 
egight_8();
       }
	   
	    else if(array_key_exists('twelve_12', $_POST)) 
		{ 
twelve_12();
       }
	   
	   
	     else if(array_key_exists('oneEight_18', $_POST)) 
		{ 
oneEight_18();
       }
	   
	   
		function NOTTE() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; TIMEH; 00";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
				function egight_8() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; TIMEH; 08";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		
				function twelve_12() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; TIMEH; 12";
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  
		}
		
		
				function oneEight_18() 
		{ 
	 
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; METEO; TIMEH; 18";
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
        
	  
	
	
	
	









<div class="row">
	 <form method="post">
	 	<div  class="col s3 m2 l1">

	  NEBBIA:</div>
			<div  class="col s3 m2 l1">
<input type="submit" name="nebbia_no"
		class="button" value=" NO"  class="input-field"  /> 
	</div>
	 	<div  class="col s3 m2 l1">

		<input type="submit" name="nebbia_minima"
		class="button" value="MINIMA"  class="input-field"  /> 
	 </div>
	 	<div  class="col s3 m2 l1">

		<input type="submit" name="nebbia_media"
		class="button" value="MEDIA"  class="input-field"  /> 
	</div>
		<div  class="col s3 m2 l1">

		<input type="submit" name="nebbia_fitta"
		class="button" value="FITTA"  class="input-field"  /> 
		</div>
	</form> 
	</div>

 
   <div class="row">
	<form method="post"> 
		<div  class="col s3 m2 l1">
	  PIOGGIA:</div>
	  	<div  class="col s3 m2 l1">
		<input type="submit" name="pioggia_no"
		class="button" value=" NO"  class="input-field"  /> 
	</div>
		<div  class="col s3 m2 l1">
		<input type="submit" name="pioggia_leggera"
		class="button" value=" LEGGERA"  class="input-field"  /> 
	</div>
		<div  class="col s3 m2 l1">
		<input type="submit" name="pioggia_media"
		class="button" value="MEDIA"  class="input-field"  /> 
	</div>
		<div  class="col s3 m2 l1">
		<input type="submit" name="pioggia_intesta"
		class="button" value="INTENSA"  class="input-field"  /> 
		</div>
	</form>
	
		</div>
  
    <div class="row">

	 <form method="post"> 
			<div  class="col s3 m2 l1">
 NEVE:</div>
 		<div  class="col s3 m2 l1">

		<input type="submit" name="neve_no"
		class="button" value=" NO"  class="input-field"  /> 
	</div>
			<div  class="col s3 m2 l1">

		<input type="submit" name="neve_leggera"
		class="button" value=" LEGGERA"  class="input-field"  /> 
	</div>
			<div  class="col s3 m2 l1">

		<input type="submit" name="neve_media"
		class="button" value="MEDIA"  class="input-field"  /> 
        </div>
				<div  class="col s3 m2 l1">

		<input type="submit" name="neve_intesta"
		class="button" value="INTENSA"  class="input-field"  /> 
		</div>
	</form>
	</div>
 
  
   <div class="row">
   <form method="post"> 
   		<div  class="col s3 m2 l1">

         ADERENZA:</div>
   		<div  class="col s3 m2 l1">

		<input type="submit" name="aderenza_ottima"
		class="button" value="OTTIMA"  class="input-field"  /> 
        </div>
				<div  class="col s3 m2 l1">

		<input type="submit" name="aderenza_umido"
		class="button" value="UMIDO"  class="input-field"  /> 
		</div>
				<div  class="col s3 m2 l1">
		<input type="submit" name="aderenza_bagnato"
		class="button" value=" BAGNATO"  class="input-field"  /> 
	</div>
			<div  class="col s3 m2 l1">
		<input type="submit" name="aderenza_ghiaccio"
		class="button" value="GHIACCIO"  class="input-field"  /> 
		</div>
	</form>
  </div>
   
   

   
  
    <div class="row">
		
	<form action="get_Report.php" method="post"> 
	<div  class="col s3 m2 l1">

	   STAGIONE:</div>
	   <div  class="col s3 m2 l1">

		<input type="submit" name=" PRIMAVERA"
		class="button" value="PRIMAVERA"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">

		<input type="submit" name="ESTATE"
		class="button" value="ESTATE"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">
		<input type="submit" name="AUTUNNO"
		class="button" value=" AUTUNNO"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">

		<input type="submit" name="IVERNO"
		class="button" value="IVERNO"  class="input-field"  /> 
		</div>
		</form>
		</div>
		
		
		  <div class="row">

	<form  method="post"> 
	<div  class="col s3 m2 l1">
	ORA:  </div>
	<div  class="col s3 m2 l1">

		<input type="submit" name="NOTTE"
		class="button" value="NOTTE"  class="input-field"/> 
		</div>
		<div  class="col s3 m2 l1">

		<input type="submit" name="egight_8"
		class="button" value="8:00"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">

		<input type="submit" name="twelve_12"
		class="button" value="12:00"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">
		<input type="submit" name="oneEight_18"
		class="button" value="18:00"  class="input-field"  /> 
		</div>
	</form>
	</div>


	
	
	   <div class="row">

	   <form method="post"> 
	   <div  class="col s3 m2 l1">

	   LUCE:
	 </div><div  class="col s3 m2 l1">

		<input type="submit" name="luce_on"
		class="button" value="ON"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">
		<input type="submit" name="luce_off"
		class="button" value="OFF"  class="input-field"  /> 
		</div>
	</form>
	   </div>
    <div class="row">

	<form method="post"> 
	<div  class="col s3 m2 l1">
	ABBAGLIA:
 </div>
 <div  class="col s3 m2 l1">

		<input type="submit" name="glow_on"
		class="button" value="ON"  class="input-field"  /> 
		</div>
		<div  class="col s3 m2 l1">

		<input type="submit" name="glow_off"
		class="button" value="OFF"  class="input-field"  /> 
		</div>
	</form>
	</div>




















































	
	
	
	
	  </div>
   </body>
</html>