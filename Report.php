
<!DOCTYPE html>
<html>
   <head>
     <title>SimuRAIL D&T </title>
	<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
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
	  <script>
	  /*
var previousValue = null;



 var update = function() {
     $.ajax({
       async: true,
        url: 'Reportphp.php',
         data: 'id=testdata',
            dataType: 'text',
            cache: false,
        success : function(data){
            $('#listposts').append(data+"</br>");
        },
    });
};
update();
var refInterval = window.setTimeout('update()', 10000);




*/

</script>
   </head>
   <body>
   <div class ="container">
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
        
	  
	   <div class = "row" style=" background-color: green;">
	   <div id="listposts">
 <p id="listpostsp">



</p>
</div>
	    </div>
	  
	  </div>
   


<script type="text/javascript">
        $(function() 
		{
            startRefresh();
        });
        function startRefresh() {
            setTimeout(startRefresh,10);
            $.get('Reportphp.php', function(data) {
                $('#listpostsp').append('<p>'+data+'</p>').Date();
            });
        }
    </script>


</body>
</html>