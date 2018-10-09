<?php
  session_start();
  include("../credential.php");
  $_SESSION['msg']='';

  if(!isset($_SESSION['username'])){
		header("Location: ../index.php");
  }

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $query = "Update course SET Course_code='".$_POST['Course_code']."' , Course_name='".$_POST['Course_name']."' WHERE Uname LIKE '".$_SESSION['username']."' AND Prog_code LIKE '".$_POST['Prog_code']."' AND Course_code LIKE '".$_POST['cc']."' ";

  //echo $query."<br>";

  $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

  if($res){
    echo "<script>alert('Successfully Updated');</script>";
    ?>

    <script>
      window.location.href = "view.php?cc=<?php echo $_POST['Course_code']; ?>#<?php echo $_POST['Course_code']; ?>";
    </script>

    <?php

  }else{
    $r ="add.php?pc=".$_POST['Prog_code']."&cc=".$_POST['Course_code']."&cn=".$_POST['Course_name'];

    $r = str_replace(" ","+",$r);

    echo "<script>alert('Course not Updated, Check and Try Again....!!!');</script> ";

    ?>

    <script>
      window.location.href = "view.php?cc=<?php echo $_POST['Course_code']; ?>#<?php echo $_POST['Course_code']; ?>";
    </script>

    <?php
  }

?>
