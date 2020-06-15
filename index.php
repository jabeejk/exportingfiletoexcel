<?php
	include_once 'db.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Exporting to Excelsheet</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
      .table tr th{
        padding: 80px;
      }

  </style>
</head>
<body>
<div class ="container">
	<h2>Excel Exporting</h2>
	<hr/>
<form method="post" action="excel.php">  

	  <input type="submit" name="btn" id="btn" value="Export file" class="btn btn-success">

</form>
<br/><br/>
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>nextvisit</th>
        <th>concern</th>
        <th>safety</th>
        <th>recommendations</th>
        <th>opinion</th>
        <th>accompany</th>
        <th>gender</th>
        <th>ybirthday</th>
        <th>sbirthday</th>
        <th>ymarriage</th>
        <th>kbirthday1</th>
        <th>kbirthday2</th>
        <th>kbirthday3</th>
        <th>mobile1</th>
        <th>mobile2</th>
        <th>email</th>
        <th>datetime</th>
      </tr>
    </thead>
    <tbody>
    	<?php while($result = mysqli_fetch_assoc($fire)) {  ?>
      <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['nextvisit']; ?>t</td>

        <td><?php

               $get = json_decode($result['concern']);
               $get1  = implode("<br/>", $get);
               echo $get1;
             // foreach ($get as $value) {
             //    echo $value ."<br/>";
             // }

              ?></td>


        <td><?php
                                 $get1= json_decode($result['safety']);
                                 $val = count($get1);
                                 if($val >= 5)
                                 {
                                    echo "All of the above";
                                 }
                                 else
                                 {
                                    foreach ($get1 as $value1) {
                                        echo $value1."<br/>";
                                    }
                                 }

                                 ?> </td>
        <td><?php echo $result['recommendations']; ?></td>
        <td><?php          
                                $get = json_decode($result['opinion']); 
                                foreach ($get as $value) {
                                    echo $value."<br/>";
                                }
                                ?></td>
        <td><?php echo $result['accompany']; ?></td>
        <td><?php echo $result['gender']; ?></td>
        <td><?php echo $result['ybirthday']; ?></td>
        <td><?php echo $result['sbirthday']; ?></td>
        <td><?php echo $result['ymarriage']; ?></td>
        <td><?php echo $result['kbirthday1']; ?></td>
        <td><?php echo $result['kbirthday2']; ?></td>
        <td><?php echo $result['kbirthday3']; ?></td>
        <td><?php echo $result['mobile1']; ?></td>
        <td><?php echo $result['mobile2']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td><?php echo $result['datetime']; ?></td>
        
      </tr>
  <?php } ?>
    </tbody>
  </table>


</div>


</body>
</html>