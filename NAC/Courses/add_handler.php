<?php
  session_start();
  include("../credential.php");
  $_SESSION['msg']='';

  if(!isset($_SESSION['username'])){
		header("Location: ../index.php");
  }

  $connection = mysqli_connect($servername, $username, $password, $dbname);

  $query = "Insert INTO course VALUES('".$_SESSION['username']."','".$_POST['Prog_code']."','".urlencode($_POST['Course_code'])."','".urlencode($_POST['Course_name'])."')";

  //echo $query."<br>";

  $res  = mysqli_query($connection,$query);// or die(mysqli_error($connection));

  if($res){
    echo "<script>alert('Successfully Added');</script>";
    ?>

    <script>
      window.location.href = "view.php?cc=<?php echo $_POST['Course_code'] ?>#<?php echo $_POST['Course_code'] ?>";
    </script>

    <?php

  }else{
    $r ="add.php?pc=".$_POST['Prog_code']."&cc=".$_POST['Course_code']."&cn=".$_POST['Course_name'];

    $r = str_replace(" ","+",$r);

    echo "<script>alert('Course not Added, you have added the same course code previously, course code need to be unique , Check and Try Again....!!!');</script> ";


    ?>

    <script>
      window.location.href = <?php echo "'".$r."'"; ?>;
    </script>

    <?php
  }

?>
