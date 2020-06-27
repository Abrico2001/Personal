	<?php
     
//$contents = file_get_contents($_FILES['file']['tmp_name']);
//preg_match_all("/\\[(.*?)\\]/", $contents, $matches); 
//echo $matches[1][0];
//print_r($matches[0]);








    ?>
	



<!DOCTYPE html>
<html>
 <head>
      <title>The Materialize Grids Example</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
   
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    

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



select {
    min-width:300px;
    min-height: 200px;
    border-width: 3px;
    border-color: rgba(50, 50, 50, 0.14);
    margin: 10px 10px 10px 0px;
}
</style>
	  
   </head>
<body>
<div class="container">



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






<?php

  if(array_key_exists('cars_test', $_POST)) 
		{ 
	$choice= $_POST['cars_test'];

if (isset($choice))
	{
$First = "[";
$Second = "]";

$Firstpos=strpos($choice, $First);
$Secondpos=strpos($choice, $Second);
//echo "what".$Firstpos."what";
//echo "?".$Secondpos."?";
echo "!!" .substr($choice,$Firstpos+1,$Secondpos - $Firstpos-1)."!!";///well done comand to be sent



 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

    $msg = "SIMURAIL; SIMCOM; SYSTEM; SCRIPT;".substr($choice,$Firstpos+1,$Secondpos - $Firstpos-1);
    $len = strlen($msg);

    socket_sendto($sock,  $msg, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
  





function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
$parsed = get_string_between($choice, '[', ']');
//echo "Abrico".$parsed."Abrico";
if($Firstpos !=-1 && $Secondpos!=-1 && $Firstpos < $Secondpos){
    $id = substr($choice, $Firstpos, $Secondpos);
	echo 'submit '. $id;
}else{
//Not match $First or $Second
}
//echo 'The Credit Card you have selected is '. $choice;
}
else {
//echo "You have not selected any credit card.";
}
}
?>
<form action=""  method="post" enctype="multipart/form-data">
   <label for="file">SCRIPT File:</label> <input type="file" name="file" id="file"/>
  <input type="submit">
  
  </form>
</div>
<div class="row">
	<form method="post">
<label for="cars">Select row:</label>

<select id="cars" name="cars_test" multiple>
 <?php
 
 if(isset($_FILES['file']))
 {
    $image= file_get_contents($_FILES['file']['tmp_name']);
    $filearray = explode("\n", $image);
while (list($var, $val) = each($filearray))
	{
        ++$var;
        $val = trim($val);
?>
<option value="<?= $val;?>"> <?= $val;?></option>
<?php
}
}
?>
</select>
<input type="submit" value="submit">
</form>
</div>

</div>
</body>
</html>
