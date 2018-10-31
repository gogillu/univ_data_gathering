<?php 	session_start();
		if(isset($_SESSION['username'])){                             
		header("Location: homepage.php");   }
		?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="./css/theme.css">
 <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
    
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
        
        .container1{
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
        
        
        .form-well {
    background: #eee;
    border-radius: 0;
    margin-bottom: 0;
    border:solid 1px #ccc;
    box-shadow:0 0 8px #000;
}
.form-well .form-well{
    border:none;
    box-shadow:none;
}
.blue-txt {
    color: #424242;
}
.form-well legend {
    font-size: 25px;
    margin: 10px 0 25px;
}
.group {
    position: relative;
    margin-bottom: 35px;
}
input {
    font-size: 18px;
    padding: 5px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
}
input:focus {
    outline: none;
}
/* LABEL ======================================= */

.form-well form label {
    color: #484848;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 10px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}
/* active state */

.form-well form input:focus ~ label,
.form-well form input:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #424242;
    left: 0;
    border: none;
}
.form-well form textarea:focus ~ label,
.form-well form textarea:valid ~ label {
    top: -20px;
    font-size: 14px;
    color: #424242;
    left: 0;
}
/* BOTTOM BARS ================================= */

.bar {
    position: relative;
    display: block;
    width: 100%;
}
.bar:before,
.bar:after {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: #424242;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
}
        
.bar:before {
    left: 50%;
}
        
.bar:after {
    right: 50%;
}
/* active state */

input:focus ~ .bar:before,
input:focus ~ .bar:after {
    width: 50%;
}
.highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}
input:focus ~ .highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
}
.form-well form input,
.form-well form textarea {
    color: #000 !important;
    border-bottom: solid 2px #ccc;
    width: 100%;
    height: 45px;
}
.form-well form textarea {
    height: 135px;
    border:none;
    border-bottom: solid 2px #ccc;
    border-top: solid 2px #ccc;
}
.form-well form .group label {
    color: #484848;
}
.form-well input:focus,
.form-well form textarea:focus {
    padding: 5px 10px;
}
.form-well form .btn {
    background: #424242;
    width: 150px;
    color: #fff !important;
    padding: 10px;
    position: relative;
    font-size: 18px;
    letter-spacing: 1px;
}
@-webkit-keyframes inputHighlighter {
    from {
        background: #fff;
    }
    to {
        width: 0;
        background: transparent;
    }
}
@-moz-keyframes inputHighlighter {
    from {
        background: #fff;
    }
    to {
        width: 0;
        background: transparent;
    }
}
@keyframes inputHighlighter {
    from {
        background: #fff;
    }
    to {
        width: 0;
        background: transparent;
    }
}

        
        </style>
<link rel="icon" href="logo.png">
<title>Information Gathering System</title>
</head>
<body class="BACK">
    
    <div class="container DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div id="left"></div>   
        
        <div id="middle">
            <div class="container" style="width:100%;">
                <div style="width:16%; float:left;" class="x">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>
            
                <div style="width:65%; margin-left:-5px; background-color:;" class="x">
                    <div style="font-size:30px; padding-top:20px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:5px; color:#FFF;"><b>Information Gathering System 2017 - 2018</b></div>
                </div>
            </div>
                        
        </div>
        
        <div id="right"></div>
    </div>
    
        
    <div class="container">
	<div class="col-m-12 text-center">
		<h2></h2>
	</div>
	<div class="col-sm-12 custom-box">
	    <div class="col-md-6 col-md-offset-3">
			 <div class="well form-well">
				<div class="well form-well">
					<legend class="blue-txt text-center">Login</legend>
					<form name="f1" action="attemptlogin.php" method="post">
						<div class="group">
							<input id="username" name="username" required="" type="text">
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Username</label>
						</div>

						<div class="group">
							<input id="password" name="password" required="" type="password">
							<span class="highlight"></span>
							<span class="bar"></span>
							<label>Password</label>
						</div>
                        
                        <div class="group">
							<center> 
                                <button type="submit" name="submit" value="Login" class="btn btn-warning">Submit</button>
                            </center>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>    
        
        
        <!--
        <table style="border:1px solid black;" >
            
            <form name="f1" method="post" action="attemptlogin.php">
                <tr>
                    <td>Username</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>Ram</td>
                </tr>
            </form>
        </table>
        -->
 
</body>
</html>