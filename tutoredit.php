<?php
 $connection=mysqli_connect("localhost","root","","admin");

$id=$_GET['id'];
$g="SELECT * from tutor where id=$id";
$b=mysqli_query($connection,$g);
while($c=mysqli_fetch_array($b))
                  {
                    $id=$c['id'];
                    $uname=$c['uname'];
                    $phone=$c['phone'];
                    $email=$c['email'];
                    $date=$c['date'];
                    $department=$c['department'];
                    $permission=$c['permission'];
                    $password=$c['password'];
                  }
?>


<html>
    <head>
        <title>Tutor</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(rgb(245, 59, 59),#0d1423);    
            }
       .card
       {
        position: relative;
        width: 350px;
        height: 480px;
        background: #0d1423;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0 0 0 0.25);
           }
           .card .poster{
            position: relative;
            overflow: hidden;
           }
           .card .poster::before{
            content: '';
            bottom: -200px;
            position: absolute;
            width:100%;
            height: 100%;
        background: linear-gradient(0deg,white  50%,transparent);
        transition: 0.5s;
        z-index: 1;
           }
           .card:hover .poster::before{
            bottom: 0px;
           }
           .card .poster img{
            width:100%;
            transition: 0.5s;
           }
           .card:hover .poster img{
            transform: translateY(-50px);
            filter: blur(5px);
          color:aquamarine
           }
           .card .details{
            position: absolute;
            bottom: -420px;
            left: 0;
            padding: 20px;
            width:100%;
            z-index: 2;
            transition: 0.5s;
           }
           .card:hover .details{
            bottom: 40px;
           }
           .card .details h1{
            font-size:20px;
            color:black;
           }




    </style>
    <body>
        <div class="card">
            <div class="thumbnail">
            <div class="poster">
                <img src="logo.png" style="border-radius:20px;">
            </div>
            <div class="details">
                <center><b><h1 style="font-family:Bell MT;font-size:25px;">Create Tutor</b></h1><br>
                    <form method="post" action="edit_update2.php">
                    <input type="text" hidden name="id" value="<?php echo $id; ?> ">
                        <center><i  class="fa fa-user" style="color:black;font-size:25px;"></i>&nbsp; &nbsp; &nbsp; <input type="text" name="uname" placeholder="Enter user name" value="<?php echo $uname; ?> "  style='font-family:Bell MT;' required/></center><br>
   <center><i class="fa fa-phone" style="color:black;font-size:25px;"></i>&nbsp; &nbsp; &nbsp;<input type="number" name="phone" placeholder="Enter phone number"  value="<?php echo $phone; ?>"  style='font-family:Bell MT;' required/><br></center><br>
   <center><i  class="fa fa-envelope" style="color:black;font-size:21px;"></i>&nbsp; &nbsp;  <input type="text" name="email" placeholder="Enter E-mail" value="<?php echo $email; ?>"  style='font-family:Bell MT;' required/></center><br>
   <center><i  class="fa fa-calendar" style="color:black;font-size:21px;"></i>&nbsp; &nbsp;  <input type="date" name="date" value="<?php echo $date; ?>"   style='font-family:Bell MT; width:165px;' required/></center><br>
   <center><i  class="fa fa-graduation-cap" style="color:black;font-size:25px;margin-left:-4px;"></i>&nbsp;&nbsp;  
   <select name="department"  value="<?php echo $department; ?>" style="width:165px;">
        <option>--Select--Department--</option>
        <option>BSC.CS</option>
        <option>BSC.IT</option>
        <option>BSC.CT</option>
        <option>BBA</option>
        <option>BCOM</option>
        <option>BSC.ZOOLOGY</option></select><br><br>
        <center><i  class="fa fa-th-large" style="color:black;font-size:21px;"></i>&nbsp;&nbsp; &nbsp; 
            <select  name="permission" style="width:165px;">
            <option>--Choose--Permission--</option>
            <optionzz>ALL</option>
            <option>Edit</option>
            <option>View</option>
            <option>Delete</option>
            </select><br><br>
   <center><i class="fa fa-lock" style="color:black;font-size:25px;"></i>&nbsp; &nbsp; &nbsp;<input type="password" name="password" placeholder="Enter Password" value="<?php echo $password; ?>" style='font-family:Bell MT;' required/><br></center><br><br>
   <input type="submit" name="submit" value="Update" style='color:white;font-family:Bell MT;margin-left:180px;' class="btn btn-primary">
        </form>  
        </div>

    </body>
    </html>