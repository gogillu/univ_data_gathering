<?php session_start();
$_SESSION['msg']='';
include("../credential.php");
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
        
        th{
            font-size: 14px;
            padding:15px;
        }
        
        td{
            font-size: 22px;
            padding: 8px;
            text-align: center;
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
    
    <div id="myHeader" class="col-sm-12 UNAME" style="z-index:10; width:100%;">
        <center><div id="myHeader1" class="col-sm-1 UNAME" style="padding:10px; style='visibility:hidden;'"><a href="../logout.php"><h4 style=" color:#fff; font-size:15px;" ><?php echo "BACK";?></h4></a></div></center>
        <center><div id="myHeader2" class="col-sm-10 UNAME" style="padding:10px;"><h4 style=" color:#fff; font-size:18px;"><?php echo strtoupper($_SESSION['names']);?></h4></div></center>
        <center><div id="myHeader3" class="col-sm-1 UNAME" style="padding:10px; "><a href="../logout.php"><h4 style=" color:#fff; font-size:15px; "><?php echo "LOGOUT";?></h4></a></div></center>
    </div>
    
    <div>
        <a style="visibility:hidden;">d</a>
    </div>
    
                   <center><a style="color:black; ;;;; font-weight:normal; font-size:25px;">PROGRESS</a></center> 
    
    
    <center>
    
        <br><br><br>
        
    <table border="1" id="progress">
    
        <tr>
            <th>DEPARTMENT NAME</th>
            <th>CRITERIA 1</th>
            <th>CRITERIA 2</th>
            <th>CRITERIA 3</th>
            <th>CRITERIA 4</th>
            <th>CRITERIA 5</th>
            <th>CRITERIA 6</th>
            <th>CRITERIA 7</th>
        </tr>
    
        <?php
        
            $query = "SELECT * FROM admins";
            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $res = mysqli_query($connection,$query);
            
            while($row = $res->fetch_assoc()){
        ?>
        
        
        <tr>
            <th><?php echo $row['name']; ?></th>
            <td>
                <?php

                    $c1 = "SELECT * FROM t1_1_1 where Uname LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t1_1_2 where Uname LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t1_1_3 where Uname LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t1_2_1 where Uname LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t1_2_2 where Uname LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t1_3_1 where Uname LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t1_3_2 where Uname LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t1_3_4 where Uname LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t1_4_1 where Username LIKE '".$row['username']."'";
                    $c10= "SELECT * FROM t1_4_2 where Username LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                
                    echo $q."/10";
                
                ?>
            </td>
            <td>
                <?php

                    $c1 = "SELECT * FROM t2_1_1 where Uname LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t2_1_2 where Uname LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t2_1_3 where Uname LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t2_2_1 where Uname LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t2_2_2 where Uname LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t2_2_3 where Uname LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t2_3_1 where Uname LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t2_3_2 where Uname LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t2_2_3 where Uname LIKE '".$row['username']."'";
                    $c10= "SELECT * FROM t2_4_1 where Uname LIKE '".$row['username']."'";
                    $c11= "SELECT * FROM t2_4_2 where Uname LIKE '".$row['username']."'";
                    $c12= "SELECT * FROM t2_4_3 where Uname LIKE '".$row['username']."'";
                    $c13= "SELECT * FROM t2_4_4 where Uname LIKE '".$row['username']."'";
                    $c14= "SELECT * FROM t2_4_5 where Uname LIKE '".$row['username']."'";
                    $c15= "SELECT * FROM t2_5_1 where Uname LIKE '".$row['username']."'";
                    $c16= "SELECT * FROM t2_5_2 where Uname LIKE '".$row['username']."'";
                    $c17= "SELECT * FROM t2_5_3 where Uname LIKE '".$row['username']."'";
                    $c18= "SELECT * FROM t2_5_4 where Uname LIKE '".$row['username']."'";
                    $c19= "SELECT * FROM t2_5_5 where Uname LIKE '".$row['username']."'";
                    $c20= "SELECT * FROM t2_6_1 where Uname LIKE '".$row['username']."'";
                    $c21= "SELECT * FROM t2_6_2 where Uname LIKE '".$row['username']."'";
                    $c22= "SELECT * FROM t2_6_3 where Uname LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20= mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);
                    $r22= mysqli_query($connection,$c22);
                
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);
                    $a22 = mysqli_num_rows($r22);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }
                    if($a22>=1){
                        $q++;
                    }
                
                    echo $q."/22";
                
                ?>
            </td>
            <td>
                <?php

                    $c1 = "SELECT * FROM t3_1_1 where Username LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t3_1_2 where Username LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t3_1_3 where Username LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t3_1_4 where Username LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t3_1_5 where Username LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t3_1_6 where Username LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t3_2_2 where Username LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t3_2_3 where Username LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t3_3_1 where Username LIKE '".$row['username']."'";
                    $c10= "SELECT * FROM t3_3_2 where Username LIKE '".$row['username']."'";
                    $c11= "SELECT * FROM t3_3_3 where Username LIKE '".$row['username']."'";
                    $c12= "SELECT * FROM t3_3_4 where Username LIKE '".$row['username']."'";
                    $c13= "SELECT * FROM t3_4_1 where Username LIKE '".$row['username']."'";
                    $c14= "SELECT * FROM t3_4_2 where Username LIKE '".$row['username']."'";
                    $c15= "SELECT * FROM t3_4_3 where Username LIKE '".$row['username']."'";
                    $c16= "SELECT * FROM t3_4_4 where Username LIKE '".$row['username']."'";
                    $c17= "SELECT * FROM t3_4_5 where Username LIKE '".$row['username']."'";
                    $c18= "SELECT * FROM t3_4_6 where Username LIKE '".$row['username']."'";
                    $c19= "SELECT * FROM t3_4_7 where Username LIKE '".$row['username']."'";
                    $c20= "SELECT * FROM t3_4_8 where Username LIKE '".$row['username']."'";
                    $c21= "SELECT * FROM t3_5_1 where Username LIKE '".$row['username']."'";
                    $c22= "SELECT * FROM t3_5_2 where Username LIKE '".$row['username']."'";
                    $c23= "SELECT * FROM t3_5_3 where Username LIKE '".$row['username']."'";
                    $c24= "SELECT * FROM t3_6_1 where Username LIKE '".$row['username']."'";
                    $c25= "SELECT * FROM t3_6_2 where Username LIKE '".$row['username']."'";
                    $c26= "SELECT * FROM t3_6_3 where Username LIKE '".$row['username']."'";
                    $c27= "SELECT * FROM t3_6_4 where Username LIKE '".$row['username']."'";
                    $c28= "SELECT * FROM t3_7_1 where Username LIKE '".$row['username']."'";
                    $c29= "SELECT * FROM t3_7_2 where Username LIKE '".$row['username']."'";
                    $c30= "SELECT * FROM t3_7_3 where Username LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20= mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);
                    $r22 = mysqli_query($connection,$c22);
                    $r23 = mysqli_query($connection,$c23);
                    $r24 = mysqli_query($connection,$c24);
                    $r25 = mysqli_query($connection,$c25);
                    $r26 = mysqli_query($connection,$c26);
                    $r27 = mysqli_query($connection,$c27);
                    $r28 = mysqli_query($connection,$c28);
                    $r29 = mysqli_query($connection,$c29);
                    $r30 = mysqli_query($connection,$c30);
                
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);
                    $a22 = mysqli_num_rows($r22);
                    $a23 = mysqli_num_rows($r23);
                    $a24 = mysqli_num_rows($r24);
                    $a25 = mysqli_num_rows($r25);
                    $a26 = mysqli_num_rows($r26);
                    $a27 = mysqli_num_rows($r27);
                    $a28 = mysqli_num_rows($r28);
                    $a29 = mysqli_num_rows($r29);
                    $a30 = mysqli_num_rows($r30);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }
                    if($a22>=1){
                        $q++;
                    }
                    if($a23>=1){
                        $q++;
                    }
                    if($a24>=1){
                        $q++;
                    }
                    if($a25>=1){
                        $q++;
                    }
                    if($a26>=1){
                        $q++;
                    }
                    if($a27>=1){
                        $q++;
                    }
                    if($a28>=1){
                        $q++;
                    }
                    if($a29>=1){
                        $q++;
                    }
                    if($a30>=1){
                        $q++;
                    }
                
                    echo $q."/30";
                
                ?>
            </td>
            <td>
                <?php

                    $c1 = "SELECT * FROM t4_1_1 where Uname LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t4_1_2 where Uname LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t4_1_3 where Uname LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t4_2_4 where Uname LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t4_2_1 where Uname LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t4_2_2 where Uname LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t4_2_3 where Uname LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t4_2_4 where Uname LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t4_2_5 where Uname LIKE '".$row['username']."'";
                    $c10= "SELECT * FROM t4_2_6 where Uname LIKE '".$row['username']."'";
                    $c11= "SELECT * FROM t4_2_7 where Uname LIKE '".$row['username']."'";
                    $c12= "SELECT * FROM t4_3_1 where Uname LIKE '".$row['username']."'";
                    $c13= "SELECT * FROM t4_3_2 where Uname LIKE '".$row['username']."'";
                    $c14= "SELECT * FROM t4_3_3 where Uname LIKE '".$row['username']."'";
                    $c15= "SELECT * FROM t4_3_4 where Uname LIKE '".$row['username']."'";
                    $c16= "SELECT * FROM t4_4_1 where Uname LIKE '".$row['username']."'";
                    $c17= "SELECT * FROM t4_4_2 where Uname LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15 = mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    
                    echo $q."/17";
                
                ?>
            </td>
                        <td>
                <?php

                    $c1 = "SELECT * FROM t5_1_1 where Uname LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t5_1_2 where Uname LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t5_1_3 where Uname LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t5_1_4 where Uname LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t5_1_5 where Uname LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t5_1_6 where Uname LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t5_2_1 where Uname LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t5_2_2 where Uname LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t5_2_3 where Uname LIKE '".$row['username']."'";
                    $c10= "SELECT * FROM t5_3_1 where Uname LIKE '".$row['username']."'";
                    $c11= "SELECT * FROM t5_3_2 where Uname LIKE '".$row['username']."'";
                    $c12= "SELECT * FROM t5_4_1 where Uname LIKE '".$row['username']."'";
                    $c13= "SELECT * FROM t5_4_2 where Uname LIKE '".$row['username']."'";
                    $c14= "SELECT * FROM t5_4_3 where Uname LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    
                    echo $q."/14";
                
                ?>
            </td>
                        <td>
                <?php

                    $c1 = "SELECT * FROM t6_1_1 where Uname LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t6_1_2 where Uname LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t6_2_1 where Uname LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t6_2_2 where Uname LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t6_2_3 where Uname LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t6_2_4 where Uname LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t6_3_1 where Uname LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t6_3_2 where Uname LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t6_3_3 where Uname LIKE '".$row['username']."'";
                    $c10= "SELECT * FROM t6_3_4 where Uname LIKE '".$row['username']."'";
                    $c11= "SELECT * FROM t6_3_5 where Uname LIKE '".$row['username']."'";
                    $c12= "SELECT * FROM t6_4_1 where Uname LIKE '".$row['username']."'";
                    $c13= "SELECT * FROM t6_4_2 where Uname LIKE '".$row['username']."'";
                    $c14= "SELECT * FROM t6_4_3 where Uname LIKE '".$row['username']."'";
                    $c15= "SELECT * FROM t6_5_1 where Uname LIKE '".$row['username']."'";
                    $c16= "SELECT * FROM t6_5_2 where Uname LIKE '".$row['username']."'";
                    $c17= "SELECT * FROM t6_5_3 where Uname LIKE '".$row['username']."'";
                    $c18= "SELECT * FROM t6_5_4 where Uname LIKE '".$row['username']."'";
                    $c19= "SELECT * FROM t6_5_5 where Uname LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    $r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15= mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    $a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a10>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    
                    echo $q."/19";
                
                ?>
            </td>
                        <td>
                <?php

                    $c1 = "SELECT * FROM t7_1_1 where Uname LIKE '".$row['username']."'";
                    $c2 = "SELECT * FROM t7_1_2 where Uname LIKE '".$row['username']."'";
                    $c3 = "SELECT * FROM t7_1_3 where Uname LIKE '".$row['username']."'";
                    $c4 = "SELECT * FROM t7_1_4 where Uname LIKE '".$row['username']."'";
                    $c5 = "SELECT * FROM t7_1_5 where Uname LIKE '".$row['username']."'";
                    $c6 = "SELECT * FROM t7_1_6 where Uname LIKE '".$row['username']."'";
                    $c7 = "SELECT * FROM t7_1_7 where Uname LIKE '".$row['username']."'";
                    $c8 = "SELECT * FROM t7_1_8 where Uname LIKE '".$row['username']."'";
                    $c9 = "SELECT * FROM t7_1_9 where Uname LIKE '".$row['username']."'";
                    //$c10= "SELECT * FROM t7_1_10 where Uname LIKE '".$row['username']."'";
                    $c11= "SELECT * FROM t7_1_11 where Uname LIKE '".$row['username']."'";
                    $c12= "SELECT * FROM t7_1_12 where Uname LIKE '".$row['username']."'";
                    $c13= "SELECT * FROM t7_1_13 where Uname LIKE '".$row['username']."'";
                    $c14= "SELECT * FROM t7_1_14 where Uname LIKE '".$row['username']."'";
                    $c15= "SELECT * FROM t7_1_15 where Uname LIKE '".$row['username']."'";
                    $c16= "SELECT * FROM t7_1_16 where Uname LIKE '".$row['username']."'";
                    $c17= "SELECT * FROM t7_1_17 where Uname LIKE '".$row['username']."'";
                    $c18= "SELECT * FROM t7_1_18 where Uname LIKE '".$row['username']."'";
                    $c19= "SELECT * FROM t7_1_19 where Uname LIKE '".$row['username']."'";
                    $c20= "SELECT * FROM t7_2_1 where Uname LIKE '".$row['username']."'";
                    $c21= "SELECT * FROM t7_3_1 where Uname LIKE '".$row['username']."'";
                    
                    $r1 = mysqli_query($connection,$c1);
                    $r2 = mysqli_query($connection,$c2);
                    $r3 = mysqli_query($connection,$c3);
                    $r4 = mysqli_query($connection,$c4);
                    $r5 = mysqli_query($connection,$c5);
                    $r6 = mysqli_query($connection,$c6);
                    $r7 = mysqli_query($connection,$c7);
                    $r8 = mysqli_query($connection,$c8);
                    $r9 = mysqli_query($connection,$c9);
                    //$r10= mysqli_query($connection,$c10);
                    $r11 = mysqli_query($connection,$c11);
                    $r12 = mysqli_query($connection,$c12);
                    $r13 = mysqli_query($connection,$c13);
                    $r14 = mysqli_query($connection,$c14);
                    $r15= mysqli_query($connection,$c15);
                    $r16 = mysqli_query($connection,$c16);
                    $r17 = mysqli_query($connection,$c17);
                    $r18 = mysqli_query($connection,$c18);
                    $r19 = mysqli_query($connection,$c19);
                    $r20 = mysqli_query($connection,$c20);
                    $r21 = mysqli_query($connection,$c21);
                    
                    $a1 = mysqli_num_rows($r1);
                    $a2 = mysqli_num_rows($r2);
                    $a3 = mysqli_num_rows($r3);
                    $a4 = mysqli_num_rows($r4);
                    $a5 = mysqli_num_rows($r5);
                    $a6 = mysqli_num_rows($r6);
                    $a7 = mysqli_num_rows($r7);
                    $a8 = mysqli_num_rows($r8);
                    $a9 = mysqli_num_rows($r9);
                    //$a10= mysqli_num_rows($r10);
                    $a11 = mysqli_num_rows($r11);
                    $a12 = mysqli_num_rows($r12);
                    $a13 = mysqli_num_rows($r13);
                    $a14 = mysqli_num_rows($r14);
                    $a15 = mysqli_num_rows($r15);
                    $a16 = mysqli_num_rows($r16);
                    $a17 = mysqli_num_rows($r17);
                    $a18 = mysqli_num_rows($r18);
                    $a19 = mysqli_num_rows($r19);
                    $a20 = mysqli_num_rows($r20);
                    $a21 = mysqli_num_rows($r21);
                                
                    $q=0;
                
                    if($a1>=1){
                        $q++;
                    }
                    if($a2>=1){
                        $q++;
                    }
                    if($a3>=1){
                        $q++;
                    }
                    if($a4>=1){
                        $q++;
                    }
                    if($a5>=1){
                        $q++;
                    }
                    if($a6>=1){
                        $q++;
                    }
                    if($a7>=1){
                        $q++;
                    }
                    if($a8>=1){
                        $q++;
                    }
                    if($a9>=1){
                        $q++;
                    }
                    if($a11>=1){
                        $q++;
                    }
                    if($a12>=1){
                        $q++;
                    }
                    if($a13>=1){
                        $q++;
                    }
                    if($a14>=1){
                        $q++;
                    }
                    if($a15>=1){
                        $q++;
                    }
                    if($a16>=1){
                        $q++;
                    }
                    if($a17>=1){
                        $q++;
                    }
                    if($a18>=1){
                        $q++;
                    }
                    if($a19>=1){
                        $q++;
                    }
                    if($a20>=1){
                        $q++;
                    }
                    if($a21>=1){
                        $q++;
                    }
                    
                    echo $q."/20";
                
                ?>
            </td>            
        </tr>
        
        
        <?php
            }
        ?>
        
    </table>
    
    </center>
    
</body>
</html>