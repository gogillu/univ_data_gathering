<?php 	
        session_start();
        include("../credential.php");

$date = date_create();
save_log($_SESSION['username'],getUserIP(),$_SERVER['REQUEST_URI'],urlencode(http_build_query($_POST, '', '&amp;')),date_format($date, 'Y-m-d H:i:s'));


		if(!isset($_SESSION['username'])){                             
		  header("Location: ../login.php");   
        }
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    
    
    <script>
        
        function rotate(tg) {
                console.log(tg);
                $("#"+tg).toggleClass('flip');
        }
/*        
        $(document).ready(function(){
            $("#h111").click(function(){
                $("#d111").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h112").click(function(){
                $("#d112").slideToggle("slow");
            });
        });

        
        $(document).ready(function(){
            $("#h113").click(function(){
                $("#d113").slideToggle("slow");
            });
        });
        
        $(document).ready(function(){
            $("#h121").click(function(){
                $("#d121").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h122").click(function(){
                $("#d122").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h131").click(function(){
                $("#d131").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h132").click(function(){
                $("#d132").slideToggle("slow");
            });
        });

        $(document).ready(function(){
            $("#h142").click(function(){
                $("#d142").slideToggle("slow");
            });
        });

  */
        function percent_limit_input(x,y,event){
            console.log(x.toString());
            console.log(event.which);
            
            var c=0;
            var t;
            
            for(var i=0; i<x.length; i+=1){
                t = x.toString().charAt(i);
                console.log(" . count = "+t);
                if(t=='.'){
                   c+=1;
                }
            }
            
            if(c>=2){
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";                           
            }
            
            if(event.which==69 || event.which==189){
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";            
            }else if(parseFloat(x)<=10000 || parseFloat(x)>=0){
                
            }else{
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";
            }
            
            /*
            if(x.indexOf("-")!=-1){
                   document.getElementById(y).value = x.toString().slice(0,-1);
            console.log(x);
            }
            */
            if(parseFloat(x)>10000 || parseFloat(x)<0){
                alert('Please Enter a valid Percentage ');
               document.getElementById(y).value = "";
            }
        }
        
        function fetch_academic_year(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    var elem = document.getElementById("y"+x);
                    console.log(x);
                    elem.innerHTML = this.responseText;
                    if(val!="none") elem.value = val;
                    console.log(elem.value);
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_academic_year.php", true);
            xhttp.send();
        }
        
        function fetch_academic_year_dis_cont(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    var elem = document.getElementById("y"+x);
                    console.log(x);
                    elem.innerHTML = this.responseText;
                    if(val!="none") elem.value = val;
                    console.log(elem.value);
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_academic_year_dis_cont.php", true);
            xhttp.send();
        }

        
        function fetch_course_name(x,y){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;   
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_course_name.php?Course_code="+x, true);
            xhttp.send();
        }
        
        function fetch_programme_name(x,y){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("n"+y).value = this.responseText;   
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_programme_name.php?Prog_code="+x, true);
            xhttp.send();
        }
        
        function fetch_programme_code(x, val = "none"){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200) {
                    //console.log(this.responseText);
                    var elem = document.getElementById("p"+x);
                    elem.innerHTML = this.responseText;
                    var a = this.responseText;
                    a = $(a).next("option[value='"+val+"']");
                    $(a).attr('selected','selected');
                    
                    if(val!="none") elem.value = val;
                }
            };
            xhttp.open("GET", "../Dropdowns/fetch_programme_code.php", true);
            xhttp.send();
        }
        
        function fetch_course_code(x,y, val = "none"){
            
            fetch_programme_name(x,y);
            
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200) {
                    u = "c"+y.slice(1,y.length);
                    document.getElementById(u).innerHTML = this.responseText;
                    if(val!="none") document.getElementById(u).value = val;
                }
            };
            xhttp.open("GET","../Dropdowns/fetch_course_code.php?Prog_code="+x, true);
            xhttp.send();
        }
        
        function get_time(){
            var d = new Date();
            var n = d.getTime();
            return n.toString();
            //return new Date(ms).toISOString.slice(11.-1);
        }
        
        
        function num_rows(tid,fid){
            l = $('#'+tid).find('tr').length;
            console.log("Number of rows : "+l+"----"+tid);
            
            if(l>2){
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="52" height="52"><br><a style="font-size:15px; color:#000;">Filled ('+(l-2)+')</a>';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="48" height="48"><br><a style="font-size:15px; color:#000;"">Not Filled</a>';
            }
        }
        
    </script>
    
<link rel="icon" href="../logo.png">
<title>Information Gathering System</title>
    
        
    <style> 
        
        th{
            text-align: center;
            font-weight: 500;
            font-size: 15px;
        }
        
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }
        
        .image {            
            -moz-transition: transform 1s;
            -webkit-transition: transform 1s;
            transition: transform 1s;
            
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);            

        }

        .flip {
            transform: rotate(180deg);
        }
        
        
        #d111, #h111, #d112, #h112, #d113, #h113, #d121, #h121, #d122, #h122, #d131, #h131, #d132, #h132, #d134, #h134, #d141, #h141, #d142, #h142{
            /*background-color: #CACACA;*/
            border: solid 0px #CACACA;
            color: black;
        }

        #d111, #d112, #d113, #d121, #d122, #d131, #d132,#d134, #d141, #d142{
            padding: 10px;
            display: none;
        }
    </style>

    <style>
            
        
        textarea{
            resize:none;
        }
        
        select{
            width:10%;
            background-color:#ffffff;
            opacity:.92;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }
        
        input[type=text],input[type=number],textarea {
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }
        
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0;
        }

        input[type=submit],input[type=button],.Save {
            width: 650px;
            /*
            background-color: #424242;
            color: #EEEEEE;
            */
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
         button {
            width: 90px;
            background-color: #ffffff;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #333333;
        }

        
        button:hover {
            background-color: #cd2026;
        }
    
        .add,.remove{
            border: 0px;
        }
    
        .body{
/*				
            background-color:#CACACA;
            */
            /*background-color:#CACACA;
            */
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
            width: 20%;
        }
        
        #middle{
            width: 50%;
        }
        
        #right{
            width: 10%;
        }
        input[type=button]{
        	background-color: #444;
		    color: white;
        }
        input[type=button]:hover {
            background-color: #333333;
        }

    </style>
    
</head>
<body class="BACK" onload="load_time_func();">
    
    <div class="container col-sm-12 DAVV" style="width:100%; padding-bottom:20px; padding-top:20px;">
        <div class="col-sm-3"></div>   
        
        <div class="col-sm-8" style="margin-left:-50px;">
            <div class="container" style="width:100%;">
                <div class="col-sm-2" style="margin-left:5px;">
                    <img src="logo.png" alt="logo" style="width:120px; height:120px;">
                </div>
            
                <div class="col-sm-10" style="margin-left:-20px;">
                    <div style="font-size:30px; margin-top:20px; margin-left:30px; color:#FFF"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
                    <div style="font-size:20px; margin-top:10px; margin-left:30px; color:#FFF;"><b>Information Gathering System 2017 - 2018</b></div>
                </div>
            </div>
                        
        </div>
        
        <div class="col-sm-1"></div>
    </div>
    
    <div id="myHeader" class="col-sm-12 Username" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 Username" style="padding:10px;"><a href="../homepage.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 Username" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['name']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 Username" style="padding:10px;"><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>
        
    <script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                header.classList.add("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#424242";
                document.getElementById("myHeader1").style.backgroundColor = "#424242";
                document.getElementById("myHeader2").style.backgroundColor = "#424242";
                document.getElementById("myHeader3").style.backgroundColor = "#424242";
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.backgroundColor = "#616161";
                document.getElementById("myHeader1").style.backgroundColor = "#616161";
                document.getElementById("myHeader2").style.backgroundColor = "#616161";
                document.getElementById("myHeader3").style.backgroundColor = "#616161";
            }
        }

    </script>
<div id="as">
<div class="col-sm-12" style="height:40px;">
    <hr/>
</div>
    
    <div class="col-sm-12">
        
         <center><a style="color:black; ;;;; font-weight:normal; font-size:22px;">EVALUATIVE REPORT OF THE DEPARTMENT</a></center>    
    
    </div>

<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>
    
    
    <div class="col-sm-12">
    
        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Year of Establishment</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f1" type="number" placeholder="Year" style="width:240px;"></div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Is the Department part of a School/Faculty of the University</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <select id="f2" style=" width:240px;">
                    <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Names of programmes offered</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <textarea id="f3" cols="80" style="height:100px;" placeholder="Write the names of all programmes separated by comma"></textarea>
            </div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Sanctioned (UG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f41" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
		  <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Filled (UG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f42" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
		  <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Sanctioned (PG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f43" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
		 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of teaching posts Filled (PG)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f44" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
        
        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Research Projects received</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f51" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
		<div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Research Projects: Total grants received</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f52" type="number" placeholder="Number" style="width:140px;"></div>
        </div>

        <div class="col-sm-12">
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;"><b>Inter -institutional collaborative projects and Associated grants received:</b></div>
            <div class="col-sm-6" style="text-align:right; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>
            
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>National collaboration</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f61" type="text" placeholder="Description" style="width:540px;"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>International collaboration</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f62" type="text" placeholder="Description" style="width:540px;"></div>
        </div>

        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Departmental projects funded by DST-FIST,UGC-SAP/CAS,DPE, DBT, ICSSR, AICTE etc.</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f7" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
		 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Departmental projects funded by DST-FIST,UGC-SAP/CAS,DPE, DBT, ICSSR, AICTE etc. : Total grants received</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f7" type="number" placeholder="Number" style="width:240px;"></div>
        </div>

        
        <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Special research laboratories sponsored by / created by industry or corporate bodies</b>
            </div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f8" type="number" placeholder="Number" style="width:240px;"></div>
        </div>

        <div class="col-sm-12">
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;"><b>Publications:</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>
            
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Papers Published</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f91" type="number" placeholder="Papers" style="width:240px;"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of books with ISBN</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f92" type="number" placeholder="Number" style="width:240px;"></div>
			<div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Citation Index (Range)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f931" type="number" placeholder="Citation Index" style="width:240px;"></div>
			<div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Citation Index (Average)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f932" type="number" placeholder="Citation Index" style="width:240px;"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Impact factor (Range)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f941" type="number" placeholder="Impact factor" style="width:240px;"></div>
        <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Impact factor (Average)</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f942" type="number" placeholder="Impact factor" style="width:240px;"></div>
        
          <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of h-index</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f95" type="number" placeholder="h-index" style="width:240px;"></div>

		</div>
		
    

      <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Details of patents and income generated</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <textarea id="f10" style="height:100px;" cols="80" placeholder="Details of patents and income generated"></textarea>
            </div>
        </div>   
<div class="col-sm-12">
          
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Areas of consultancy and income generated</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f11" type="text" placeholder="Description" style="width:540px;"></div>
        </div>
   <div class="col-sm-12">
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;"><b>Awards/Recognitions received at the National
and International level by :</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>
            
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Faculty</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f121" type="number" placeholder="Number" style="width:240px;"></div>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Doctoral/ Post Doctoral fellows</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f122" type="number" placeholder="Number" style="width:240px;"></div>
  <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Students</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f123" type="number" placeholder="Number" style="width:240px;"></div>

    </div>    
 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>How many students have cleared Civil
Services and Defense Services examinations,
NET, SET (SLET), GATE and other
competitive examinations</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f13" type="number" placeholder="Number" style="width:240px;"></div>
        </div>
 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>List of doctoral, post-doctoral students
and research associates:</b></div> <div class="col-sm-6" style="text-align:right; padding:10px; font-size:16px; margin-top:20px; visibility:hidden;">l</div>
           <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>From the host institution/university</b></div> <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <textarea id="f141" cols="80"  style="height:100px;" placeholder="List items separated by comma"></textarea>
            </div>
   <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>From other institutions/universities</b></div> <div class="col-sm-6" style="text-align:left; padding:10px;" >
                <textarea id="f142" cols="80"  style="height:100px;" placeholder="List items separated by comma"></textarea>
            </div>
        </div>   
 <div class="col-sm-12">
            <br>
            <div class="col-sm-6" style="text-align:left; padding:10px; font-size:16px; margin-top:20px;" ><b>Number of Research Scholars/ Post Graduate
students getting financial assistance from the
University/State/ Central</b></div>
            <div class="col-sm-6" style="text-align:left; padding:10px;" ><input id="f15" type="number" placeholder="Number" style="width:140px;"></div>
        </div>
<div class="col-sm-12" style="height:30px;">
    <hr/>
</div>

</div>
    <div class="col-sm-12"> <div class="col-sm-3" style="text-align:right; padding:10px; font-size:16px; margin-top:20px;" ></div>  <div class="col-sm-6" style="text-align:right; padding:10px; font-size:16px; margin-top:20px;" > <input type="button" onclick="save()" value="Save"> </div><div class="col-sm-3" style="text-align:right; padding:10px; font-size:16px; margin-top:20px;" ></div></div>
</div>
    <script>

function save()
{
	var a = $('#as').find('input, select, textarea');
	var rows = "('<?php echo $_SESSION['username'];?>','";
	var i = 1;
	for(var x = 0; x < a.length; x++)
	{
		if(x!=a.length-1) rows += ""+$(a[x]).val()+"','";
		else rows +=""+$(a[x]).val()+"');";
	}
	var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
         			       	alert(this.responseText);
							alert("Changes Saved Succesfully");
							
         			       }
         			       };
          			   			 xhttp.open("POST", "saveData.php", true);
								xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         			   			 xhttp.send("rows="+rows+"&table=eval_report");
}

function fetch()
{
	var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
         			       		var b = this.responseText;
         			       		var res = b.split(",");
         			       		var a = $('#as').find('input, select, textarea');
         			       		for(var x = 0; x < a.length-1; x++)
								{	if(res[x+1]==null){
									res[x+1]="";
								}
									$(a[x]).val(''+res[x+1]);
								}
         			       	}
         			       };
         			       		 
          			   			 xhttp.open("GET", "fetch.php?table=eval_report", true);
         			   			 xhttp.send();
}


function load_time_func(){
        
fetch();   

  
        }
    </script>
</body>
</html>

