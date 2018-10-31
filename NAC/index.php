
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
<title>Data Capturing System NAAC A & A 2019</title>
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
                    <div style="font-size:20px; margin-top:5px; color:#FFF;"><b>Data Capturing System NAAC A & A 2019</b></div>
                </div>
            </div>

        </div>

        <div id="right"></div>
    </div>

    <center>
   <div style="margin-top:200px; " >
       <input type="button"  onclick="location.href='login.php';" value="Proceed"/>

   	   <input type="button"  onclick="location.href='http://www.dauniv.ac.in/umis.php';" value="UTD MIS"/>
   </div>
    </center>

</body>
</html>
