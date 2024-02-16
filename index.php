<?php
require_once('connection.php');
if(isset($_POST['submit']))
{
	
	$uname=$_POST['uname'];
	$upas=$_POST['upas'];
	
if($con)
{
	echo $uname;
		$mod="select * from login where adminname='$uname' and password=$upas";
		$res=mysqli_query($con,$mod);
		 
	if(mysqli_num_rows($res)>0)
	{
		header('location:admindashboard.php');
	}
	else
	{
		echo 'Not Register';
	}
}
	else
	{
		echo 'not found';	
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        </head>
        <style>
            {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: #23242a;
            }
            .box{
                position: relative;
                width: 380px;
                height: 420px;
                background: #1c1c1c;
                border-radius: 8px;
                overflow: hidden;
            }
            .box::before{
                content: '';
                position: absolute;
                top:-50%;
                left:-50%;
                width: 380px;
                height: 420px;
                background: linear-gradient(0deg,transparent,#007bb2,#007bb2);
                transform-origin: bottom right;
                animation: animate 6s linear infinite;
            }
            .box::after{
                content: '';
                position: absolute;
                top:-50%;
                left:-50%;
                width: 380px;
                height: 420px;
                background: linear-gradient(0deg,transparent,#007bb2,#007bb2);
                transform-origin: bottom right;
                animation: animate 6s linear infinite;
                animation-delay: -3s;
            }
            @keyframes animate{
                0%
                {
                    transform: rotate(0deg);
                }
                100%{
                    transform: rotate(360deg); 
                }
            }
            .form{
                position: absolute;
                inset:2px;
                border-radius: 8px;
                background: #28292d;
                z-index: 10;
            }
            .form input{
                width:70%;
                margin-bottom:20px;
                color:darkgray;
            }
            .form input[type="text"],[type="password"]{
               border:none;
               border-bottom:1px solid white;
               background:transparent;
               height:40px;
               font-size:16px;
            }
            .form input[type="submit"]{
                height:40px;
                background:#007bb2;
                color:black;
                font-size:18px;
                border-radius:20px;
                width: 80%;
            }
            .form input[type="submit"]:hover
            {
                cursor:pointer;
                background:#dc381f;
                color:#000000;
                
            }
            .form a{
                 text-decoration:none;
                 font-size:15px;
                 line-height:25px;
                 color:#DCDCDC;
            }
            .form a:hover{
                color:yellow;
            }
        </style>

        <body>
            <form method="post" action="#">
            <div class="box">
                <div class="form">
                   
                    <center><h2 style='color:#007bb2;font-family:Bell MT;'> Admin Login </h2></center><br><br> <div>
                     
   <center><i  class="fa fa-user" style="color:#007bb2;font-size:25px;"></i>&nbsp; &nbsp; &nbsp; <input type="text" name="uname" placeholder="Enter Admin name" style='font-family:Bell MT;color:white;' required/></center><br>
   <center><i class="fa fa-lock" style="color:#007bb2;font-size:25px;"></i>&nbsp; &nbsp; &nbsp;<input type="password" name="upas" placeholder="Enter Password" style='font-family:Bell MT;color:white;' required/><br></center><br><br>
  <center><input type="submit" name="submit" value="Login" style='font-family:Bell MT;color:white'>  </center>
                </div>

            </div>
        </form>
            </body>
    </html>