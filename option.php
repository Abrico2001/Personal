
<!DOCTYPE html>
<html>


  <head>
      <title>SimuRAIL D&T </title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>     

 <script type = "text/javascript" src = "https://code.jquery.com/jquery-3.3.1.js"></script>     
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
	  
 <script src = " http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
   
 <link rel = "stylesheet" href = "http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
 
 <script src = " https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script> 
  <script src = " https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script> 
  <script src = "https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script> 
  
  
  
 <script src = " http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
   
 <link rel = "stylesheet" href = "http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
 
 <script src = " https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script> 
  <script src = " https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script> 
  <script src = "https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script> 
  
  
  <link rel = "stylesheet" href = " https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel = "stylesheet" href = " https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
  
   <link rel = "stylesheet" href = "https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
   <link rel = "stylesheet" href = "https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css">
   </head>
<body>




<script>
var editor; // use a global for the submit and return data rendering in the examples

    $(document).ready(function() {
	
	
	

 
      var myTable =   $('#example1').DataTable( {
		     //   dom: "Bfrtip",

            "processing": true,
            "ajax": {
                "url": "opzioni.json",
                "dataSrc": "EndpointInvio"
            },
		
            "columns": [
			
		{
                data: null,
                defaultContent: '',
                className: 'select-checkbox',
                orderable: false
            },
			
                { "data": "IP" },
                { "data": "Porta" },
               
            ]
			,
			select: {
            style:    'os',
            selector: 'td:first-child'
        },
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit",   editor: editor },
            { extend: "remove", editor: editor }
        ]
    
        } );
		
    } );
 var rows = myTable.rows( '.selected' );
 
 rows.edit( {
    title: 'Edit '+rows.count()+' rows'
} );
 rows.edit( {
    buttons: [
        { label: 'Cancel', fn: function () { this.close(); } },
        'Edit'
    ]
} );
 
  // Activate an inline edit on click of a table cell
    $('#example1').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
		
		
		
		
		
    } );
	
	
	
	
	
	
	
		
	
	
</script>


<script>
    $(document).ready(function() {
        $('#example2').DataTable( {
            "processing": true,
            "ajax": {
                "url": "opzioni.json",
                "dataSrc": "Guasti"
            },
            "columns": [
                { "data": "Descrizione" },
                { "data": "Attivato" },
                { "data": "Disattivato" },
              
            ]
        } );
    } );
 
</script>

<script>
    $(document).ready(function() {
        $('#example3').DataTable( {
            "processing": true,
            "ajax": {
                "url": "opzioni.json",
                "dataSrc": "Scenari"
            },
            "columns": [
                { "data": "Nome" },
                { "data": "Parametri" },
              
              
            ]
        } );
    } );
 
</script>
   
   
   <script>
    $(document).ready(function() {
        $('#example4').DataTable( {
            "processing": true,
            "ajax": {
                "url": "opzioni.json",
                "dataSrc": "PortaRicezione"
            },
           
        } );
		
		
		
    } );
 
</script>
   
     <script>
   $(document).ready(function() {
    var table = $('#example2').DataTable();
     
    $('#example2 tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        alert( 'You clicked on '+data[0]+'\'s row' );
    } );
} );
   
     </script>
   
   
   
   
   
   
   
   
   
   
   
   
   
<h1>The select multiple attribute</h1>

<p>The multiple attribute specifies that multiple options can be selected at once:</p>







<p>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</p>
<table style="width:100%" id="example1"></table>
<table style="width:100%" id="example2"></table>
<table style="width:100%" id="example3"></table>
<table style="width:100%" id="example4"></table>
<?php

$url = 'opzioni.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file rinto a variable
$characters = json_decode($data,true); // decode the JSON feed

//echo $characters[1]->IP;

if (isset($characters['EndpointInvio']))
{
foreach ($characters['EndpointInvio'] as $data)
{
echo 'IP='.$data['IP'].', port='.$data['Porta'].'<br>';
}
}

?>

<?php

$url = 'opzioni.json'; // path to your JSON file
$data1 = file_get_contents($url); // put the contents of the file rinto a variable
$characters1 = json_decode($data1,true); // decode the JSON feed

//echo $characters[1]->IP;
 if(isset($characters1['Guasti']))
{
foreach ($characters1['Guasti'] as $data1)
{
echo 'Descrizione='.$data1['Descrizione'].', Attivato='.$data1['Attivato'].'Disattivato='.$data1['Disattivato'].'<br>';
}
}

?>
<?php

$url2 = 'opzioni.json'; // path to your JSON file
$data2 = file_get_contents($url2); // put the contents of the file rinto a variable
$characters2 = json_decode($data2,true); // decode the JSON feed

//echo $characters[1]->IP;
 if(isset($characters2['Scenari']))
{
foreach ($characters2['Scenari'] as $data2)
{
echo 'Nome='.$data2['Nome'].', Parametri='.$data2['Parametri'].'<br>';
}
}


?>


<table id="editable" class="pure-table pure-table-bordered">
	<tbody>
		<tr>
			<th>ip</th>
			<th>port</th>
		</tr>
		<?php foreach ($characters['EndpointInvio'] as $character) : ?>
        <tr>
            <td> <?php echo $data['IP']; ?> </td>
            <td> <?php echo $data['Porta'] ;?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>


<table id="editable" class="pure-table pure-table-bordered">
	<tbody>
		<tr>
			<th>Descrizione</th>
			<th>Attivato</th>
			<th>Disattivato</th>
		</tr>
		<?php foreach ($characters1['Guasti'] as $character) : ?>
        <tr>
		
            <td>  <?php echo $data1['Descrizione']; ?>   </td>
            <td>   <?php echo $data1['Attivato'] ;  ?>   </td>
			<td>  <?php echo $data1['Disattivato']; ?>   </td>
			
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>




<table id="editable" class="pure-table pure-table-bordered">
	<tbody>
		<tr>
			<th>Nome</th>
			<th>Parametri</th>
			<th>Disattivato</th>
		</tr>
		<?php foreach ($characters2['Scenari'] as $character) : ?>
        <tr>
            <td> <?php echo $data2['Nome']; ?>       </td>
            <td> <?php echo $data2['Parametri'] ;?>  </td>
			  
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>



<form  method="post">
 
<label>Textarea:</label>
<div>
    <textarea rows="10" cols="60" name="content" required></textarea>
</div>
 
<input type="submit" name="submit" value="Submit">
</form>


<?php
if(isset($_POST['submit']))
{
	$textareaValue = trim($_POST['content']);
	
	//$sql = "insert into textarea_value (textarea_content) values ('".$textareaValue."')";
	
	 $sock = socket_create(AF_INET, SOCK_DGRAM,0);

   // $msg = "SIMURAIL; SIMCOM; METEO; MURAIL; 0.5";
  // $msg = '".$textareaValue."';
    $len = strlen($textareaValue);

    socket_sendto($sock, $textareaValue, $len, 0, '127.0.0.1', 2000);
    socket_close($sock);
	
}
?>


</body>
</html>
