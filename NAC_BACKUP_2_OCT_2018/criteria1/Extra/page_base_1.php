<?php 	
        session_start();
        include("../credential.php");
		if(!isset($_SESSION['username'])){                             
		  header("Location: ../login.php");   
        }
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>

        function rotate(tg) {
                console.log(tg);
                $("#"+tg).toggleClass('flip');
        }
        
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
            $("#h134").click(function(){
                $("#d134").slideToggle("slow");
            });
        });

        
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
                alert('Please Enter a valid Percentage [0 - 100]');
               document.getElementById(y).value = "";                           
            }
            
            if(event.which==69 || event.which==189){
                alert('Please Enter a valid Percentage [0 - 100]');
               document.getElementById(y).value = "";            
            }else if(parseFloat(x)<=100 || parseFloat(x)>=0){
                
            }else{
                alert('Please Enter a valid Percentage [0 - 100]');
               document.getElementById(y).value = "";
            }
            
            /*
            if(x.indexOf("-")!=-1){
                   document.getElementById(y).value = x.toString().slice(0,-1);
            console.log(x);
            }
            */
            if(parseFloat(x)>100 || parseFloat(x)<0){
                alert('Please Enter a valid Percentage [0 - 100]');
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
            xhttp.open("GET", "fetch_academic_year.php", true);
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
            xhttp.open("GET", "fetch_course_name.php?Course_code="+x, true);
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
            xhttp.open("GET", "fetch_programme_name.php?Prog_code="+x, true);
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
            xhttp.open("GET", "fetch_programme_code.php", true);
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
            xhttp.open("GET", "fetch_course_code.php?Prog_code="+x, true);
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
                document.getElementById(fid).innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled ('+(l-2)+' Rows)';
            }else{
                console.log("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
                document.getElementById(fid).innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }
        }
        
    </script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="icon" href="logo.png">
<title>Information Gathering System</title>
    
        
    <style> 
    

        
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
        
        
        #d111, #h111, #d112, #h112, #d113, #h113, #d121, #h121, #d122, #h122, #d131, #h131, #d132, #h132, #d134, #h134{
            background-color: #dce4ef;
            border: solid 1px #dce4ef;
            color: black;
        }

        #d111, #d112, #d113, #d121, #d122, #d131, #d132, #d134{
            padding: 10px;
            display: none;
        }
    </style>

    
    <style>
    
        textarea{
            resize:none;
        }
        
        input[type=text],input[type=number], select,textarea {
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
            background-color: #4CAF50;
            color: black;
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
            background-color: #45a049;
        }

        input[type=button]:hover {
            background-color: #45a049;
        }

        
        button:hover {
            background-color: #cd2026;
        }
    
        .add,.remove{
            border: 0px;
        }
    
        .body{
/*
            background-color:#dce4ef;
            */
            /*background-color:#dce4ef;
            */
        }
        
    </style>
    
</head>
<body style="background-color:#dce4ef;" onload="load_time_func();">
    <center>
        
        <!--<div style="border:5px solid black; width:800px; height:650px;">-->
        <div>
            <div Style="font-size:35px; margin-top:10px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
            <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Information Gathering System</b></div>
            <div Style="font-size:20px; margin-top:10px; color:red; margin-bottom:10px;"><b>2017 - 2018</b></div>
            <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:20px;">
            <div Style="font-size:25px; margin-top:15px; color:black; margin-bottom:10px;"><b><?php echo $_SESSION['name']; ?></b></div>
            <br>
        </div>
    
    <center><a style="color:blue; font-weight:bold; font-size:22px;">CRITERIA 1 - CURRICULAR ASPECTS</a></center>
        
    <br><br><hr/>
        
<!--
    1.1.1
-->

        <script>
        
            function save111(ta)
        	{
                link =  document.getElementById("link1_1_1").value;
                ta = ta.value;
                
                console.log(ta+"\n"+link);
                
                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d111").slideToggle("slow");
                               rotate("tg111");
                               
                               if(document.getElementById("TA1_1_1").value==""){
                                    document.getElementById("ch111").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
                                }else{
                                    document.getElementById("ch111").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
                                }
                               
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet111.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>
        

        
        <center><a style="color:blue; font-weight:normal; font-size:22px;">1.1 Curriculum Design and Development</a></center>

    <hr/>
        
        <div id="ch111" style="margin-left:-1140px;">
            <img src="../images/filled.png" width="58" height="58"> Filled
        </div>

        <div id="to111" style="margin-left:1040px;">
            <img class="image flip"  id="tg111" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d111").slideToggle("slow");'>
        </div>
        
        <div id="h111" style="margin-top:-70px;" onclick="rotate('tg111')">

    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.1.1
        </div>
        <div style="margin-left:60px; text-align:left;">
            Curricula developed /adopted have relevance to the local/ national / regional/global developmental needs with learning objectives including Programme outcomes, Programme specific outcomes and course outcomes of all the Programme offered by the University.
        </div>
    </div>
        
    </div>

    <div id="d111">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <form>
        
        <textarea id="TA1_1_1" style="margin-left:-75px; width:650px;height:300px;  opacity:.82;">
            
        </textarea>
        
        <br><br>

        <div style="height:10px; visibility:hidden;">
        
        <div style="margin-left:-615px; font-weight:bold;">
            File Description : 
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" id="link1_1_1" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        </div>
            
        <input type="button" onclick="save111( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
    
    </div>
    
    <br><hr/><br>
                
<!--
    1.1.2
-->
<script>
        	function save112(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 200000) console.log("empty");
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
                        var percent = $($(rows[i]).find('input')[1]).val();
                        if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}else if(percent==""){
                            alert('Please select valid percentage to save');
        					return false;   
                        }
        				else
        				{
                            
        				var idd = $(rows[i]).attr('id');		 
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var percent = $($(rows[i]).find('input[type="number"]')[0]).val();
        				var yearOfIntro = $($(rows[i]).find('select')[1]).val();
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" + yearOfIntro + "','" + percent + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					//console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
                               
                               alert('Changes Saved Successfully');
                               $("#d112").slideToggle("slow");
                               rotate("tg112");
                               num_rows("tab112","ch112");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet112.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_112()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab112').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
   					   console.log('hi');
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   
                                    
    							}        				
        			}
                    num_rows("tab112","ch112");
        		};
          			   			 xhttp.open("GET", "fetch112.php", true);
         			   			 xhttp.send();
        	}
		</script>
        
    
        <div id="ch112" style="margin-left:-1140px;">
            <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
        </div>
        
        <div id="to112" style="margin-left:1040px;">
            <img class="image flip" id="tg112" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d112").slideToggle("slow");'>
        </div>
        
        <div id="h112" style="margin-top:-50px;" onclick="rotate('tg112')">

        
    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.1.2
        </div>
        <div style="margin-left:60px; text-align:left;">
            How many Programmes were revised out of total number of Programmes offered during the last five years.
        </div>
    </div>

        </div>
        
        <div id="d112">
            
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <script>
        
    	function addRow112()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var per= "per"+i;
            
            /* onkeyup="percent_limit_input(this.value,this.id)"  onkeypress="return event.charCode >= 48"*/
            
            var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td> <td><center><select placeholder="Year" style="width:140px;" id="'+ay+'"></select></center></td><td><center><input id="'+per+'" type="number" step="0.5" min="0" max="100" onkeyup="percent_limit_input(this.value,this.id,event)"  placeholder="Percentage" style="width:120px;" required></center></td><td class="remove"><center><button onclick="console.log($(this).parents()[2].remove());" >Remove</button></center></td></tr>';
    		var x = $('#tab112').find('tr');		
   			$(x[x.length-1]).before(html);
            
            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    	function addRow113()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
    		var html = '<tr id="'+i+'" ><td><center><select id="'+ip+'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;"></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="'+ic+'" onchange="fetch_course_name(this.value,this.id)" text="Course Code" style="width:150px;" ></select></center></td><td><center><input id="'+icn+'" type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><input type="text" placeholder="Activity" style="width:250px;" ></center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:140px;" ></select></center></td><td class="remove"><center><button onclick="console.log($(this).parents()[2].remove());" >Remove</button></center></td></tr>';
    		var x = $('#tab113').find('tr');		
   			$(x[x.length-1]).before(html);
            
            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab112">
            <tr>
                <th style="width:150px; padding:20px;">Programme Code of Revised Syllabus</th>
                <th style="width:250px; padding:20px;">Programme Name of Revised Syllabus</th>
                <th style="width:80px; padding:20px;">Year of Revision</th>
                <th style="width:200px; padding:20px; padding-left:0px;">Percentage of Syllabus content added or replaced</th>
            </tr>
			<tr>
				<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow112()" alt="Submit" width="48" height="48">
<!--				<td  colspan="4"><button value="" onclick="addRow112()">Add a new Row</button></td> -->
			</tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" required></center></td>
                <td><center><select placeholder="Year" style="width:80px;" required></select></center></td>
                <td><center><input type="text" placeholder="Percentage" style="width:120px;" required></center></td>
                <td><center><button onclick="$(this).parent().remove();">X</button></center></td>
            </tr>
            -->
        </table>
        
        <br><br>
        
        <input type="button" onclick="save112($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
            
        </div>
        
    <br><hr/><br>
                
<!--
    1.1.3
-->
        
    <div id="ch113" style="margin-left:-1140px;">
        <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
    </div>

        <div id="to113" style="margin-left:1040px;">
            <img class="image flip" id="tg113" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d113").slideToggle("slow");'>
        </div>
        
        <div id="h113" style="margin-top:-70px;" onclick="rotate('tg113')">

    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.1.3
        </div>
        <div style="margin-left:60px; text-align:left;">
            Average percentage of courses having focus on employability/ entrepreneurship/ skill development.
        </div>
    </div>

    </div>
    <div id="d113">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
        <script>
        	function save113(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty"); 
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}
        				else
        				{
        					
         			   	
        				var idd = $(rows[i]).attr('id');		 
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var courseName = $($(rows[i]).find('input[type="text"]')[1]).val();
        				var activity  = $($(rows[i]).find('input[type="text"]')[2]).val();
        				if(activity == "")
        				{
        					alert('Please Enter the Activity.');
        					return false;
        				}
        				var yearOfIntro = $($(rows[i]).find('select')[2]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        					console.log(""+ programmeCode + ""+ programmeName + "" +  courseCode + "" + courseName + "" + activity + "" +  yearOfIntro); 
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  courseCode + "','" + courseName + "','" + activity + "','" +  yearOfIntro + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {

                               console.log(this.responseText);
                              alert('Changes Saved Successfully');
                               $("#d113").slideToggle("slow");
                               rotate("tg113");
                               num_rows("tab113","ch113");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet113.php?rows="+rowss, true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_113()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab113').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var cc = x[1];
	          			          var ay = x[2];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   
                                   
    							}        				
        			}
                    num_rows("tab113","ch113");
        		};
          			   			 xhttp.open("GET", "fetch113.php", true);
         			   			 xhttp.send();
        	}
		</script>
    <form>

        <table border="0" id="tab113">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
            	<th style="width:250px; padding:10px;">Name of the Programme</th>    
                <th style="width:100px; padding:10px;">Course Code</th>
                <th style="width:250px; padding:10px;">Name of the Course</th>
                <th style="width:80px; padding:10px;">Activities with direct bearing on Employability/ Entrepreneurship/ Skill development</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Introduction</th>

            </tr>
            <!--<tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Programme Code" style="width:150px;" disabled></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><input type="text" placeholder="Activity" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>-->	
            
			<tr>
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow113()" alt="Submit" width="48" height="48">                

<!--				<td colspan="6"><button value="" width="500px" onclick="addRow113()">Add a new Row</button></td>  -->
			</tr>
        </table>
        
        <br><br>
        
        <input type="button" class="Save" value="SAVE CHANGES" onclick="save113($(this).parent().children()[0])" style="margin-left:-80px;">
        
    </form>
        
    </div>
        
    <br><hr/>
                
<!--
    1.2.1
-->
        <center><a style="color:blue; font-weight:normal; font-size:22px;">1.2 Academic Flexibility</a></center>

    <hr/>
	 <script>
        	function save121(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty"); 
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}
        				else
        				{
        					
         			   	
        				var idd = $(rows[i]).attr('id');		 
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var courseName = $($(rows[i]).find('input[type="text"]')[1]).val();
        				var yearOfIntro = $($(rows[i]).find('select')[2]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        					console.log(""+ programmeCode + ""+ programmeName + "" +  courseCode + "" + courseName +  "" +  yearOfIntro); 
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  courseCode + "','" + courseName + "','" +  yearOfIntro + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d121").slideToggle("slow");
                               rotate("tg121");
                               num_rows("tab121","ch121");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_2_1", true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_121()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab121').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           console.log(y);
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var cc = x[1];
	          			          var ay = x[2];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   
                                   
    							}        				
        			}
                    num_rows("tab121","ch121");
        		};
          			   			 xhttp.open("GET", "fetch121.php", true);
         			   			 xhttp.send();
        	}
		</script>
        
    <div id="ch121" style="margin-left:-1140px;">
        <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
    </div>

        <div id="to121" style="margin-left:1040px;">
            <img class="image flip" id="tg121" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d121").slideToggle("slow");'>
        </div>
        
        <div id="h121" style="margin-top:-30px;" onclick="rotate('tg121')">

        
    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.2.1
        </div>
        <div style="margin-left:60px; text-align:left;">
            Percentage of new courses introduced of the total number of courses across all Programmes offered during the last five years.
        </div>
    </div>
        
    </div>
    <div id="d121">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow121()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            
    		var html = '<tr id="'+i+'"><td><center><select id="'+ip+'" required class="programmeCode" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;"></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="'+ic+'" required onchange="fetch_course_name(this.value,this.id)" text="Course Code" style="width:150px;" ></select></center></td><td><center><input id="'+icn+'" type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:140px;" required></select></center></td><td class="remove"><center><button onclick="console.log($(this).parents()[2].remove());">Remove</button></center></td></tr>';
    		var x = $('#tab121').find('tr');		
   			$(x[x.length-1]).before(html);
            
            
            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab121">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:250px; padding:10px;">Programme Name</th>
                <th style="width:100px; padding:10px;">Course Code</th>
                <th style="width:150px; padding:10px;">Name of the new course introduced in last 5 years</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Introduction</th>

            </tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Programme Code" style="width:150px;" disabled></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>
            -->
			<tr>
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow121()" alt="Submit" width="48" height="48">
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow121()">Add a new Row</button></td>-->
			</tr>
        </table>
        
        <br><br>
        
        <input type="button"  value="SAVE CHANGES" onclick="save121($(this).parent().children()[0])" style="margin-left:-80px;">
        
    </form>
        
    </div>
        
    <br><hr/>
<!--1.2.2-->

<script>
        	function save122(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty"); 
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}
        				else
        				{
        					
         			   			 
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				var idd = $(rows[i]).attr('id');
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var type = $($(rows[i]).find('input[type="radio"]:checked')[0]).val();
        				console.log(type);
        				var yearOfIntro = $($(rows[i]).find('select')[1]).val();
        				if(type == "" || type == undefined)
        				{
        					alert('Please select type of the Course');
        					return false;
        				}
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        					console.log(""+ programmeCode + ""+ programmeName + "" + type +  "" +  yearOfIntro); 
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  type + "','" +  yearOfIntro + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                              alert('Changes Saved Successfully');
                               $("#d122").slideToggle("slow");
                               rotate("tg122");
                               num_rows("tab122","ch122");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_2_2", true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_122()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab122').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          
          			           console.log(x);
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   
                                   
    							}        				
        			}
                    num_rows("tab122","ch122");
        		};
          			   			 xhttp.open("GET", "fetch122.php", true);
         			   			 xhttp.send();
        	}
		</script>
                
    <div id="ch122" style="margin-left:-1140px;">
        <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
    </div>

        <div id="to122" style="margin-left:1040px;">
            <img class="image flip" id="tg122" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d122").slideToggle("slow");'>
        </div>
        
        <div id="h122" style="margin-top:-50px;" onclick="rotate('tg122')">

        
      <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.2.2
        </div>
        <div style="margin-left:60px; text-align:left;">
             Percentage of programs in which Choice Based Credit System (CBCS)/elective course system has been implemented.
        </div>
    </div>
        
    </div>
    <div id="d122">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
           var radioNumber122 = 0;
        function addRow122()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            
    		var html = '<tr id="'+i+'" ><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td width="300px"><center><input type="radio" name="type'+radioNumber122+'" value="CBCS">CBCS  <input type="radio" name="type'+radioNumber122+'" value="Elective"> Elective</center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:140px;" required></select></center></td><td class="remove"><center><button onclick="console.log($(this).parents()[2].remove());">Remove</button></center></td></tr>';
    		radioNumber122++;
    		var x = $('#tab122').find('tr');		
   			$(x[x.length-1]).before(html);
            
            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table border="0" id="tab122">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:250px; padding:10px;">Name of Program adopting CBCS/Elective Course System</th>
                <th style="width:100px; padding:10px;">Type of Course</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Implementation</th>

            </tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><input type="radio" name="type" value="CBCS">CBCS / Elective <input type="radio" name="type" value="Elective"></center></td>
                <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
            </tr>
            -->
			<tr>
<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow122()" alt="Submit" width="48" height="48"> 
				<!--<td colspan="4"><button value="" width="500px" onclick="addRow122()">Add a new Row</button></td>-->
			</tr>
        </table>
        
        <br><br>
        
        <input type="button" onclick="save122($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    </div>
        
    <br><hr/>
<!--
    1.3
-->

                <script>
        
            function save131(ta)
        	{
                link =  document.getElementById("link1_3_1").value;
                ta = ta.value;
                
                console.log(ta+"\n"+link);
                
                var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
                               alert('Changes Saved Successfully');
                               $("#d131").slideToggle("slow");
                               rotate("tg131");
                               
                               if(document.getElementById("TA1_3_1").value==""){
               document.getElementById("ch131").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }else{
               document.getElementById("ch131").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
            }
        		  			}
        		  		};
          			   			 xhttp.open("GET", "savet131.php?desc="+ta+"&link="+link, true);
         			   			 xhttp.send();
        		}

        </script>        
        
        <center><a style="color:blue; font-weight:normal; font-size:22px;">1.3 Curriculum Enrichment</a></center>

    <hr/>
        
        
    <div id="ch131" style="margin-left:-1140px;">
        <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
    </div>

        <div id="to131" style="margin-left:1040px;">
            <img class="image flip" id="tg131" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d131").slideToggle("slow");'>
        </div>
        
        <div id="h131" style="margin-top:-50px;" onclick="rotate('tg131')">
        
    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.3.1
        </div>
        <div style="margin-left:60px; text-align:left;">
            Institution integrates cross cutting issues relevant to Gender, Environment and Sustainability, Human Values and Professional Ethics into the Curriculum.
        </div>
    </div>
        
    </div>
    <div id="d131">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <form>
        
        <textarea id="TA1_3_1" style="margin-left:-75px; width:650px;height:300px; background-color:#ffffff; opacity:.82;">
            
        </textarea>
        
        <br><br>
        
        <div style="height:10px; visibility:hidden;">
        
        <div style="margin-left:-615px; font-weight:bold;">
            File Description : 
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input id="link1_3_1" type="text" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        </div>
        
        <input type="button" onclick="save131( $(this).parent().children()[0] )" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    </div>
        
    <br><hr/>
<!--1.3.2-->
        
    <div id="ch132" style="margin-left:-1140px;">
        <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
    </div>

        <div id="to132" style="margin-left:1040px;">
            <img class="image flip" id="tg132" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d132").slideToggle("slow");'>
        </div>
        
        <div id="h132" style="margin-top:-50px;" onclick="rotate('tg132')">

        
      <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.3.2
        </div>
        <div style="margin-left:60px; text-align:left;">
            Number of value-added courses imparting transferable and life skills offered during the last five years 
        </div>
    </div>
        
    </div>
    <div id="d132">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow132()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            var ay1= "y"+ay;
            
    		var html = '<tr id="'+i+'" ><td><center><select id="'+ip+'" onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><select id="'+ic+'" onchange="fetch_course_name(this.value,this.id)" text="Course Code" style="width:150px;" required></select></center></td><td><center><input id="'+icn+'" type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select id="'+ay+'" placeholder="Year Offering" style="width:140px;" required></select></center></td><td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48" style="width:80px;" required></center></td><td><center><select id="'+ay1+'" placeholder="Year Discontinued" style="width:140px;" required></select></center></td><td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48" style="width:80px;" required></center></td><td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48" style="width:80px;" required></center></td><td class="remove" style="width:40px;"><center><button onclick="console.log($(this).parents()[2].remove());">Remove</button></center></td></tr>';
    		var x = $('#tab132').find('tr');		
   			$(x[x.length-1]).before(html);
            
            fetch_programme_code(i);
            fetch_academic_year(i);
            fetch_academic_year(ay);
    	}
    </script>
    <style>
    	
    	td,th
    	{
    		border: 1px solid gray;
    		padding: 10px;
    	}
    </style>
      <script>
        	function save132(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty"); 
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}
        				else
        				{
        					
         			   	
        				var idd = $(rows[i]).attr('id');		 
        				var courseCode = $($(rows[i]).find('select')[1]).val();
        				if(courseCode == "" || courseCode == "Select")
        				{
        					alert('Please select atleast one Course Code to save');
        					return false;
        				}
        				var courseName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var yearOfIntro = $($(rows[i]).find('select')[2]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        				var timesOffered = $($(rows[i]).find('input[type="number"]')[0]).val();
        				if(timesOffered == "")
        				{
        					alert('Please Enter number of times the course was offered');
        					return false;
        				}
        				var yearDiscontinue = $($(rows[i]).find('select')[3]).val();
        				if(yearDiscontinue == "")
        				{
        					alert('Please Enter when the course was discontinued, Select None Otherwise');
        					return false;
        				}
        				var enrolledStudents = $($(rows[i]).find('input[type="number"]')[1]).val();
        				if(enrolledStudents == "")
        				{
        					alert('Please Enter number of Enrolled Students for the course');
        					return false;
        				}
        				var totalStudents = $($(rows[i]).find('input[type="number"]')[2]).val();
        				if(totalStudents == "")
        				{
        					alert('Please Enter total number of students completing the course this year');
        					return false;
        				}
        					console.log(""+ programmeCode +  "" +  courseCode + "" + courseName + "" +  yearOfIntro + "" + timesOffered + "" + yearDiscontinue + "" + enrolledStudents + "" + totalStudents); 
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ "','" +  courseCode + "','" + courseName + "','" +  yearOfIntro + "','" + timesOffered + "','" + yearDiscontinue + "','" + enrolledStudents + "','" + totalStudents + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d132").slideToggle("slow");
                               rotate("tg132");
                               num_rows("tab132","ch132");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_3_2", true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_132()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab132').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          var pc = x[0];
	          			          var cc = x[1];
	          			          var ay = x[2];
	          			          var ay1 = x[3];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					fetch_course_code($(pc).attr('value'), "pid"+idd, $(cc).attr('value'));
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
		            				fetch_academic_year("y"+idd, $(ay1).attr('value'));
                                   
                                   
    							}        				
        			}
                    num_rows("tab132","ch132");
        		};
          			   			 xhttp.open("GET", "fetch132.php", true);
         			   			 xhttp.send();
        	}
		</script>
    <form>

        <table id="tab132">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Course Code</th>
                <th style="width:100px; padding:10px;">Name of the value added courses (with 30 or more contact hours)offered during last five years</th>
                
                
                <th style="width:100px; padding:10px;">Year of Offering	</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of times offered during the same year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year of Discontinuation </th>
                <th style="width:100px; padding:10px; padding-left:0px;">Number of students enrolled in the year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Number of Students completing the course in the year</th>

            </tr>
          <!--  <tr>
                <td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
                <td><center><select text="Course Code" style="width:150px;" required></select></center></td>
                <td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year Offering" style="width:80px;" disabled></select></center></td>
                
                <td><center><input type="number" step="1" min="0" placeholder="Frequency in Year" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year Discontinued" style="width:80px;" disabled></select></center></td>
                <td><center><input type="number" step="1" min="0" placeholder="Total Enrolled Students" style="width:250px;" disabled></center></td>
                <td><center><input type="number" step="1" min="0" placeholder="Students Completing Course" style="width:250px;" disabled></center></td>
            </tr>
            -->
			<tr>
				<!--<td colspan="8"><button value="" width="500px" onclick="addRow132()">Add a new Row</button></td>-->
		<td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow132()" alt="Submit" width="48" height="48">	</tr>
        </table>
        
        <br><br>
        
        <input type="button" onclick="save132($(this).parent().children()[0])"  value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    </div>
        
    <br><hr/>
<!--1.3.4-->
        
    <div id="ch134" style="margin-left:-1140px;">
        <!--<img src="../images/unfilled.png" width="58" height="58">Incomplete-->
    </div>

        <div id="to134" style="margin-left:1040px;">
            <img class="image flip" id="tg134" src="../images/toggle2.png" width="38" height="38" onclick='rotate(this.id); $("#d134").slideToggle("slow");'>
        </div>
        
        <div id="h134" style="margin-top:-50px;" onclick="rotate('tg134')">

      <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.3.4
        </div>
        <div style="margin-left:60px; text-align:left;">
             Percentage of students undertaking field projects / internships (Current Year data) 
        </div>
    </div>
        
    </div>
        
        <script>
        	function save134(table)
        	{
        		var rows = $(table).find('tr');
        		if(rows.length == 20000) console.log("empty"); 
        		else {
        			var rowss = "";
        			for(var i = 1; i < rows.length-1; i++)
        			{
        				var programmeCode = $($(rows[i]).find('select')[0]).val();
        				if(programmeCode == "")
        				{
        					alert('Please select atleast one Programme Code to save');
        					return false;
        				}
        				else
        				{
        					
         			   			 
        				var programmeName = $($(rows[i]).find('input[type="text"]')[0]).val();
        				var idd = $(rows[i]).attr('id');
        				var yearOfIntro = $($(rows[i]).find('select')[1]).val();
        				if(yearOfIntro == "")
        				{
        					alert('Please select the Year of Introduction');
        					return false;
        				}
        				var studentsProgramme = $($(rows[i]).find('input[type="number"]')[0]).val();
        				var studentsInternship = $($(rows[i]).find('input[type="number"]')[1]).val();
        				if(studentsProgramme == "")
        				{
        					alert('Please Enter number of students in the programme');
        					return false;
        				}
        				if(studentsInternship == "")
        				{
        					alert('Please Enter number of students taking internships or field projects');
        					return false;
        				}
        					console.log(""+ programmeCode + ""+ programmeName + "" +  yearOfIntro + "" + studentsProgramme + "" + studentsInternship); 
        					rowss += "('"+"<?php echo $_SESSION['username'];?>"+"','"+ programmeCode + "','"+ programmeName + "','" +  yearOfIntro + "','" + studentsProgramme + "','" + studentsInternship + "','" + idd +"')";
        					if(i!=rows.length-2) rowss+= ",";
        					else rowss += ";";
        					console.log(rowss);
        				}
        			}
        			var xhttp,res;
        				    xhttp = new XMLHttpRequest();
         				    xhttp.onreadystatechange = function(){
         		   
         			       if (this.readyState == 4 && this.status == 200) {
          			         console.log(this.responseText);
                               alert('Changes Saved Successfully');
                               $("#d134").slideToggle("slow");
                               rotate("tg134");
                               num_rows("tab134","ch134");
        		  			}
        		  		};
          			   			 xhttp.open("GET", "saveData.php?rows="+rowss+"&table=t1_3_4", true);
         			   			 xhttp.send();
        		}
        	}
        	
        	
        	function fetch_rows_134()
        	{
        		var xhttp,res;
        	    xhttp = new XMLHttpRequest();
         	    xhttp.onreadystatechange = function(){
         	
        	
         		    if (this.readyState == 4 && this.status == 200) {
          			   var x = $('#tab134').find('tr');		
   					   $(x[x.length-1]).before(this.responseText);
          			           var y  = this.responseText;
          			           var responseRows = $(y).siblings();
          			           if(responseRows.length == 0){ responseRows = $(y); }
          			           for(var i = 0; i < responseRows.length; i++)
          			           {
	          			          x = $(responseRows[i]).find('select');
	          			          
          			           console.log(x);
	          			          var pc = x[0];
	          			          var ay = x[1];
	          			          var idd = $(pc).attr('id');
	          			          idd = idd.substr(1);
	          			          //for deriving id#id
	            					fetch_programme_code(idd, $(pc).attr('value'));
	            					idd = idd.substr(2);
	            					console.log(x.length);
	            					//for deriving simple id for academic year
		            				fetch_academic_year(idd, $(ay).attr('value'));
                                   
                                   
    							}        				
        			}
                    num_rows("tab134","ch134");
        		};
          			   			 xhttp.open("GET", "fetch134.php", true);
         			   			 xhttp.send();
        	}
		</script>
        
    <div id="d134">
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
        function addRow134()
    	{
            var i = get_time();
            var i = "id"+i;
            var ip = "p"+i;
            var ic = "c"+i;
            var ipn= "n"+ip;
            var icn= "n"+ic;
            var ay = "y"+i;
            
    		var html = '<tr id="'+i+'"  ><td ><center><select id="'+ip+'" required onchange="fetch_course_code(this.value,this.id)" text="Programme Code" style="width:150px;" required></select></center></td><td><center><input id="'+ipn+'" type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select id="'+ay+'" placeholder="Year" style="width:140px;" required></select></center></td><td><center><input type="number" step="1" min="0" onkeypress="return event.charCode >= 48"  placeholder="Students in programmes" style="width:250px;" required></center></td><td><center><input type="number" step="1" min="0"  onkeypress="return event.charCode >= 48" placeholder="Students doing Internships" style="width:250px;" required></center></td class="remove"><td class="remove"><center><button onclick="console.log($(this).parents()[2].remove());">Remove</button></center></td></tr>';
    		var x = $('#tab134').find('tr');		
   			$(x[x.length-1]).before(html);
            
            fetch_programme_code(i);
            fetch_academic_year(i);
    	}
    </script>
    <form>

        <table id="tab134">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Programme Name</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of students in the programme</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of students undertaking field projects / internships</th>
            </tr>
          <!--  <tr>
          		  	<td><center><select text="Programme Code" style="width:150px;" required></select></center></td>
         			<td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td>
         	 		<td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td>
         	 		<td><center><input type="text" placeholder="Students doing Internships" style="width:250px;" disabled></center></td>
         	 		<td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td>
          		</tr>
            -->
			<tr>
				<!--<td colspan="5"><button value="" width="500px" onclick="addRow134()">Add a new Row</button></td>-->
                <td class="add"  colspan="4"><input class="add" type="image" src="../images/add2.png" onclick="addRow134()" alt="Submit" width="48" height="48">
			</tr>
        </table>
        
        <br><br>
        
        <input type="button" onclick="save134($(this).parent().children()[0])" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    </div>
        
    <br><hr/>
    </center>
     
     
    <script>
        function load_time_func(){
        
<?php            
            
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t1_1_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();        
            //echo $row['Description'];
?>       
        // 1.1.1
            document.getElementById("TA1_1_1").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link1_1_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA1_1_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";
            
            if(document.getElementById("TA1_1_1").value==""){
               document.getElementById("ch111").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }else{
               document.getElementById("ch111").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
            }
            
<?php            
            
    $connection = mysqli_connect($servername, $username, $password, $dbname);
	$query = "Select * from t1_3_1 where Uname like '".$_SESSION['username']."';";
	$res  = mysqli_query($connection,$query) or die(mysqli_error($connection));
    $row  = $res ->fetch_assoc();        
            //echo $row['Description'];
?>
            
        // 1.3.1
            document.getElementById("TA1_3_1").value = '<?php echo $row["Description"]; ?>';
            document.getElementById("link1_3_1").value = '<?php echo $row["Link"]; ?>';
            document.getElementById("TA1_3_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";
            
            if(document.getElementById("TA1_3_1").value==""){
               document.getElementById("ch131").innerHTML = '<img src="../images/unfilled.png" width="58" height="58"> Not Filled';
            }else{
               document.getElementById("ch131").innerHTML = '<img src="../images/filled.png" width="58" height="58"> Filled';
            }
            
        //1.1.3 Loading all rows that are already saved
        	fetch_rows_113();
        	fetch_rows_112();
        	fetch_rows_121();
        	fetch_rows_122();
        	fetch_rows_132();
        	fetch_rows_134();
        }
    </script>
    
</body>
</html>
