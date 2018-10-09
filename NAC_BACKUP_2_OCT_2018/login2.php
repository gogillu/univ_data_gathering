<?php 	session_start();
		if(isset($_SESSION['username'])){                             
		header("Location: homepage.php");   }
		?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <style>
        
        input[type=text],input[type=password], select,textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        
        input[type=button],input[type=submit],input[type=reset] {
            width: 90px;
            background-color: #05B8CC;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .bor{
            border: 0px;
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
<link rel="icon" href="logo.png">
<title>Student Information System</title>
</head>
    
<body style="background-color:#A0D6DB;">
    
    <div class="container" style="width:100%; padding-bottom:20px; padding-top:20px; background-color:#74CDDC">
        <div id="left"></div>   
        
        <div id="middle">
            <div class="container" style="width:100%;">
                <div style="width:16%; float:left;" class="x">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>
            
                <div style="width:65%; margin-left:-5px; background-color:;" class="x">
                    <div style="font-size:30px; padding-top:20px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:5px; color:#000f1a;"><b>Information Gathering System 2017 - 2018</b></div>
                </div>
            </div>
                        
        </div>
        
        <div id="right"></div>
    </div>

    
    <center>
    
<table style="margin-top:150px;" width="400" border="2" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
    
    <tr>
            <td>
                <center><b style="font-size:20px;">Login</b></center>
            </td>
    </tr>
    
    <tr>
        <form name="f1" method="post" action="attemptlogin.php">
            <td>
                <table width="100%" border="0" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF">
                    <tr>
                        <td colspan="3" align="center" class="bor">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td width="78" class="bor">
                            <div style="font-size:17px;"><center><strong>Username</strong> </center></div>
                        </td>
                        <!--<td width="6">:</td>-->
                        <td width="290" class="bor"><center><input  name="username" type="text" id="username"></center></td>
                    </tr>
                    <tr>
                        <td width="78" class="bor">
                            <div style="font-size:17px;"><strong>Password</strong></div>
                        </td>
                        <!--<td width="6">:</td>-->
                        <td width="290" class="bor"><center><input  name="password" type="password" id="password"></center></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="bor">
                            <center>
                                <input type="submit"  name="submit" value="Login"> 
                                &nbsp;&nbsp;&nbsp;
                                <input type="reset" name="reset" value="Reset">
                            </center>
                        </td>
                    </tr>
                </table>
            </td>
        </form>
    </tr>
</table>

        </center>
        
</body>
</html>
