<?php

    session_start();

    $sourcePath = $_FILES['doc']['tmp_name'];       // Storing source path of the file in a variable
    $targetPath = "docs/"."timestamp".basename($_FILES['doc']['name']); // Target path where file is to be stored

    //echo $sourcePath;

    //print_r($_FILES);

    if($sourcePath!=""){
      if(move_uploaded_file($sourcePath,"../".$targetPath)){    // Moving Uploaded file
          //echo "WORKING";
          echo "http://localhost/univ_data_gathering/NAC/profile/".$targetPath;
      }else{
          //echo "NOT WORKING";
          echo "FILE COULD NOT BE UPLOADED REFRESH AND TRY AGAIN";
      }
    }


/*
    //echo $sourcePath;
    //echo $targetPath;

    if($_FILES['dp']['name']!=""){
        $_SESSION['temp_profile_picture_only_name'] = $_FILES['dp']['name'];
        $_SESSION['temp_profile_picture'] = $targetPath;
    }
    echo $_SESSION['temp_profile_picture'];
*/

?>
