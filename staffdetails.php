<html>
    <head>
        <title>Staff</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    </head>
    <body>
        <center><b><h1  style='font-family:Bell MT'>Staff Details</b></h1><center>
        <div class="row text-center">
        <div class="col-sm-11" style="margin-left:40px;background:linear-gradient(rgb(250, 250, 79),#0d1423);border-radius:15px;"><br>
          <div class="thumbnail" style="padding-top:300px;margin-top:-13px;margin-bottom:10px;margin-left:-10px;margin-right:-10px;">
          <div class='container-fluid'>
			<div class='row'>
				<div class='col-md-12' style="margin-top:-250px;">
				<div class='table-responsive'>
        <input type="button" class="btn btn-success" id="btnExport" value="Export" />
					<table class='table table-bordered table-hover' id="tblCustomers">
			<thead >
			 <a href="admindashboard.php"><i class="fa fa-arrow-left" style="margin-left:-1050px;font-size:23px;"></i></a>
				<br ><tr>
        <br>
					<th>ID</th>
					<th>Name</th>
					<th >Contact number</th>
					<th>Email</th>
                    <th>Date</th>
                    <th>Department</th>
					<th>Permission</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
			</thead>
            <tbody>

            <?php
                include'Connection.php';
                $a="select * from staff";
                $b=mysqli_query($con,$a);
                $d=mysqli_num_rows($b);
                if($d>=1)
                {
                  while($c=mysqli_fetch_array($b))
                  {
                	echo"<tr>";
							echo"<td>".$c['id']."</td>";
              echo"<td>".$c['uname']."</td>";
              echo"<td>".$c['phone']."</td>";
              echo"<td>".$c['email']."</td>";
              echo"<td>".$c['date']."</td>";
              echo"<td>".$c['department']."</td>";
              echo"<td>".$c['permission']."</td>";
              echo"<td>".$c['password']."</td>";


              echo"<td>";?>
              <a href="delete1.php?id=<?php echo $c['id'];?>">
              <i class='fa fa-trash' style='font-size:25px;color:#dc381f;'></i></a>&nbsp &nbsp &nbsp
              <a href="staffedit.php?id=<?php echo $c['id'];?>"> <i class='fa fa-edit' style='font-size:24px;color:#357ec7'></i></a>
              </td>
              <?php							
        echo"</tr>";
      }
    }
    else
    {
      echo"No data Found";
    }
    
    ?>

      
</tbody>
</table>
           
          
          </div>
        </div>
</div>
</body>
</html>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="table2excel.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $("#btnExport").click(function () {
                $("#tblCustomers").table2excel({
                    filename: "Table.xls"
                });
            });
        });
    </script>