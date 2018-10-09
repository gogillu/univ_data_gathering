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
    
    <script>
        var programme_dropdown = "";
        function fetch_programme_code(){
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    programme_dropdown = this.responseText;
                    
                }
                
            };
            xhttp.open("GET", "fetch_programme_code.php", true);
            xhttp.send();
        }
        
        function put_programme_code(){
            return programme_dropdown;
        }
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="icon" href="logo.png">
<title>Student Information System</title>
    <style>
    
        textarea{
            resize:none;
        }
        
        input[type=text],input[type=number],select,textarea{
            background-color:#ffffff;
            opacity:.92;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;box-sizing: border-box;
        }

        input[type=submit] {
            width: 650px;
            background-color: #4CAF50;
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
    
    </style>
    
</head>
<body style="background-color:pink;" onload="load_time_func(); fetch_programme_code();">
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
        <center><a style="color:blue; font-weight:normal; font-size:22px;">1.1 Curriculum Design and Development</a></center>

    <hr/>
        
    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.1.1
        </div>
        <div style="margin-left:60px; text-align:left;">
            Curricula developed /adopted have relevance to the local/ national / regional/global developmental needs with learning objectives including Programme outcomes, Programme specific outcomes and course outcomes of all the Programme offered by the University.
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <form>
        
        <textarea id="TA1_1_1" style="margin-left:-75px; width:650px;height:300px;  opacity:.82;">
            
        </textarea>
        
        <br><br>
        
        <div style="margin-left:-615px; font-weight:bold;">
            File Description : 
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/><br>
                
<!--
    1.1.2
-->

    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.1.2
        </div>
        <div style="margin-left:60px; text-align:left;">
            How many Programmes were revised out of total number of Programmes offered during the last five years.
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <script>
        var variable_course_codes = "";
        function programme_code_changed(elem)
        {
            var courseCode = $(elem).closest('tr').find('.courseCode');
            var programmeName = $(elem).closest('tr').find('.programmeName');
            if(courseCode.length == 0 ) console.log(0);
            else{
              $(courseCode[0]).html();
                fetch_course_code(elem.value, courseCode);
                console.log(variable_course_codes);
            } 
        }
        function fetch_course_code(programmeCode, courseCode)
        {
            var xhttp,res;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
            
                if (this.readyState == 4 && this.status == 200) {
                   // console.log(this.responseText);
                    res = this.responseText;
                    console.log(this.responseText);
                    
                $(courseCode[0]).html(res);
                }
                
            };
            xhttp.onload = function(){
                
                $(courseCode[0]).attr('disabled','false');
            }
            xhttp.open("GET", "fetch_course_code.php?Prog_code="+programmeCode, true);
            xhttp.send();
        }
    	function addRow112()
    	{
    		var html = '<tr><td><center><select text="Programme Code" style="width:150px;" onchange="programme_code_changed(this)" required>'+put_programme_code()+'</select></center></td><td><center><input type="text" class="programmeName" placeholder="Programme Name" style="width:250px;" disabled></center></td> <td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td><td><center><input type="text" placeholder="Percentage" style="width:120px;" disabled></center></td><td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td></tr>';
    		var x = $('#tab112').find('tr');		
   			$(x[x.length-1]).before(html);
    	}
    	function addRow113()
    	{
    		var html = '<tr><td><center><select text="Programme Code" style="width:150px;" onchange="programme_code_changed(this)"  required>'+put_programme_code()+'</select></center></td><td><center><input type="text" placeholder="Programme Name" class="programmeName" style="width:250px;" disabled></center></td><td><center><select text="Course Code" class="courseCode" style="width:150px;" disabled></select></center></td><td><center><input type="text" placeholder="Course Name" class="courseNName style="width:250px;" disabled></center></td><td><center><input type="text" placeholder="Activity" style="width:250px;" disabled></center></td><td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td><td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td></tr>';
    		var x = $('#tab113').find('tr');		
   			$(x[x.length-1]).before(html);
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
				<td  colspan="4"><center><button value="" type="button" onclick="addRow112()" >Add a new Row</button></center></td>
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
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/><br>
                
<!--
    1.1.3
-->

    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.1.3
        </div>
        <div style="margin-left:60px; text-align:left;">
            Average percentage of courses having focus on employability/ entrepreneurship/ skill development.
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <form>

        <table border="0" id="tab113">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
            	<th style="width:250px; padding:10px;">Name of the Programme</th>    
                <th style="width:100px; padding:10px;">Course Code</th>
                <th style="width:250px; padding:10px;">Name of the Course</th>
                <th style="width:80px; padding:10px;">Description of activities focusing on Employability/ Entrepreneurship/ Skill development</th>
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
				<td colspan="6"><button value="" type = "button" width="500px" onclick="addRow113()">Add a new Row</button></td>
			</tr>
        </table>
        
        <br><br>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/>
                
<!--
    1.2.1
-->
        <center><a style="color:blue; font-weight:normal; font-size:22px;">1.2 Academic Flexibility</a></center>

    <hr/>

    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.2.1
        </div>
        <div style="margin-left:60px; text-align:left;">
            Percentage of new courses introduced of the total number of courses across all Programmes offered during the last five years.
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
           function addRow121()
    	{
    		var html = '<tr><td><center><select text="Programme Code" style="width:150px;" required>'+put_programme_code()+'</select></center></td><td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select text="Course Code" style="width:150px;" disabled></select></center></td><td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td><td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td></tr>';
    		var x = $('#tab121').find('tr');		
   			$(x[x.length-1]).before(html);
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
				<td colspan="5"><button value="" width="500px" onclick="addRow121()">Add a new Row</button></td>
			</tr>
        </table>
        
        <br><br>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/>
<!--1.2.2-->
      <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.2.2
        </div>
        <div style="margin-left:60px; text-align:left;">
             Percentage of programs in which Choice Based Credit System (CBCS)/elective course system has been implemented.
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
           var radioNumber122 = 0;
           function addRow122()
    	{
    		var html = '<tr><td><center><select text="Programme Code" style="width:150px;" required>'+put_programme_code()+'</select></center></td><td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td width="300px"><center><input type="radio" name="type'+radioNumber122+'" value="CBCS">CBCS <br/> <input type="radio" name="type'+radioNumber122+'" value="Elective"> Elective</center></td><td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td><td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td></tr>';
    		radioNumber122++;
    		var x = $('#tab122').find('tr');		
   			$(x[x.length-1]).before(html);
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
				<td colspan="4"><button value="" width="500px" onclick="addRow122()">Add a new Row</button></td>
			</tr>
        </table>
        
        <br><br>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/>
<!--
    1.3
-->

        <center><a style="color:blue; font-weight:normal; font-size:22px;">1.3 Curriculum Enrichment</a></center>

    <hr/>
        
    <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.3.1
        </div>
        <div style="margin-left:60px; text-align:left;">
            Institution integrates cross cutting issues relevant to Gender, Environment and Sustainability, Human Values and Professional Ethics into the Curriculum.
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
            
    <form>
        
        <textarea id="TA1_3_1" style="margin-left:-75px; width:650px;height:300px; background-color:#ffffff; opacity:.82;">
            
        </textarea>
        
        <br><br>
        
        <div style="margin-left:-615px; font-weight:bold;">
            File Description : 
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="file" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <div style="margin-left:-70px;">
            Link for Additional Information : <input type="text" placeholder="Link for Additional Information" style="width:420px; background-color:#ffffff; opacity:.82;">
        </div>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/>
<!--1.3.2-->
      <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.3.2
        </div>
        <div style="margin-left:60px; text-align:left;">
            Number of value-added courses imparting transferable and life skills offered during the last five years 
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
           function addRow132()
    	{
    		var html = '<tr><td><center><select text="Programme Code" style="width:150px;" required>'+put_programme_code()+'</select></center></td><td><center><select text="Course Code" style="width:150px;" disabled></select></center></td><td><center><input type="text" placeholder="Course Name" style="width:250px;" disabled></center></td><td><center><select placeholder="Year Offering" style="width:80px;" disabled></select></center></td><td><center><input type="number" width="80px" disabled></center></td><td><center><select placeholder="Year Discontinued" style="width:80px;" disabled></select></center></td><td><center><input type="number" disabled></center></td><td><center><input type="number" disabled></center></td><td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td></tr>';
    		var x = $('#tab132').find('tr');		
   			$(x[x.length-1]).before(html);
    	}
    </script>
    <style>
    	input[type=number]
    	{
            /*
            width: 60px;
    		height: 50px;
            */
    	}
    	td,th
    	{
    		border: 1px solid gray;
    		padding: 10px;
    	}
    </style>
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
                
                <td><center><input type="number" placeholder="Frequency in Year" style="width:250px;" disabled></center></td>
                <td><center><select placeholder="Year Discontinued" style="width:80px;" disabled></select></center></td>
                <td><center><input type="number" placeholder="Total Enrolled Students" style="width:250px;" disabled></center></td>
                <td><center><input type="number" placeholder="Students Completing Course" style="width:250px;" disabled></center></td>
            </tr>
            -->
			<tr>
				<td colspan="8"><button value="" width="500px" onclick="addRow132()">Add a new Row</button></td>
			</tr>
        </table>
        
        <br><br>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/>
<!--1.3.4-->
      <div style="color:black; font-weight:bold; font-size:19px; width:850px;">
        <div style="float:left; font-size:22px;">
            1.3.4
        </div>
        <div style="margin-left:60px; text-align:left;">
             Percentage of students undertaking field projects / internships (Current Year data) 
        </div>
    </div>
        
        <br><br>
        <div style="margin-left:-215px;">
            <!--Write description within a minimum of 500 characters and maximum of 500 words.-->
        </div>
           <script>
           function addRow134()
    	{
    		var html = '<tr><td><center><select text="Programme Code" style="width:150px;" required>'+put_programme_code()+'</select></center></td><td><center><input type="text" placeholder="Programme Name" style="width:250px;" disabled></center></td><td><center><select placeholder="Year" style="width:80px;" disabled></select></center></td><td><center><input type="text" placeholder="Total number of students" style="width:250px;" disabled></center></td><td><center><input type="text" placeholder="Students doing Internships" style="width:250px;" disabled></center></td><td><center><button onclick="console.log($(this).parents()[2].remove());">X</button></center></td></tr>';
    		var x = $('#tab134').find('tr');		
   			$(x[x.length-1]).before(html);
    	}
    </script>
    <form>

        <table id="tab134">
            <tr>
                <th style="width:100px; padding:10px;">Programme Code</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Programme Name</th>
                <th style="width:100px; padding:10px; padding-left:0px;">Year</th>
                <th style="width:100px; padding:10px; padding-left:0px;">No. of students in the Programme</th>
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
				<td colspan="5"><button value="" width="500px" onclick="addRow134()">Add a new Row</button></td>
			</tr>
        </table>
        
        <br><br>
        
        <input type="submit" value="SAVE CHANGES" style="margin-left:-80px;">
        
    </form>
        
    <br><hr/>
    </center>

     
    <script>
        function load_time_func(){
        
        // 1.1.1
            document.getElementById("TA1_1_1").value = "";
            document.getElementById("TA1_1_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";
            
        // 1.3.1
            document.getElementById("TA1_3_1").value = "";
            document.getElementById("TA1_3_1").placeholder = "Write description within a minimum of 500 characters and maximum of 500 words.";
        }
    </script>
    
</body>
</html>