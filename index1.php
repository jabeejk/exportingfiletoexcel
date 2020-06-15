<?php
  include_once 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exporting to Excelsheet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

</head>
<body>
<div class ="container">
	<h2>Excel Exporting</h2>
	<hr/>

  <table id="example" class="display nowrap" style="width:100%" >
    <thead>
      <tr>
        <th>Name</th>
        <th>Password</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    	<?php while($result = mysqli_fetch_assoc($fire)) {  ?>
      <tr>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['password'];  ?> </td>
        <td><?php echo $result['address'];  ?></td>
      </tr>
  <?php } ?>
    </tbody>
  </table>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script> 
   <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel','pdf','print'
        ]
    } );
} );


</script>

</body>
</html>