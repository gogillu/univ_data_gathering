<?php session_start();
$_SESSION['msg']='';
include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


if(!isset($_SESSION['names'])){
		header("Location: ../index.php");   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

    <style>
    input[type=text],input[type=password], select,textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }


        input[type=button],input[type=submit],input[type=reset] {
            width: 220px;
            background-color: #424242;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        *{
            margin: 0;
            padding: 0;
        }

        .container{
            height: 100%;
            width: 100%;
        }

        #left, #middle, #right, .x {
            display: inline-block;
            *display: inline; zoom: 1;
            vertical-align: top;
            font-size: 12px;
            padding: 0px;
        }

        #left{
            width: 22%;
        }

        #middle{
            width: 67%;
        }

        #right{
            width: 10%;
        }

        </style>
<link rel="icon" href="./logo.png">
<title>Information Gathering System</title>
</head>
<body class="BACK">

    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>

        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="../logo.png" alt="logo" style="width:120px; height:120px;">
                </div>

                <div class="col-sm-9" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div class="col-sm-1"></div>
    </div>




    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px; style='visibility:hidden;'"><a href="progress.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['names'])." | NOTICE";?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>

    <div>
        <a style="visibility:hidden;">d</a>
    </div>

    <?php

      include("links.php");

    ?>

    <br><Br><Br>

		<?php

				$query = "SELECT * FROM notice";
				$connection = mysqli_connect($servername, $username, $password, $dbname);
				$res = mysqli_query($connection,$query);

				while($row = $res->fetch_assoc()){
					$NOTICE = $row['data'];
				}
		?>

<center>
		<form action="notice_handler.php" method="POST">

      <code>
        <?php echo $NOTICE; ?>
      </code>

	       <input style="width:1000px;" type="text" id="notice" name="notice" value="<?php echo $NOTICE; ?>">
      <br>
	    <input type="submit">

	  </form>
</center>




        <?php //header("Location: progress.php"); ?>

        <div id="right"></div>
<!--
    <center>
   <div style="margin-top:100px; " >
       <input type="button"  onclick="location.href='login.php';" value="Proceed"/>

   	   <input type="button"  onclick="location.href='http://www.dauniv.ac.in/umis.php';" value="UTD MIS"/>
   </div>
    </center>
-->
</body>
</html>
