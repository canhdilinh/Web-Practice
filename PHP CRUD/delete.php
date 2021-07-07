<?php 
       include "dbcon.php";
       $ID=$_GET['id'];
  $delquery = "DELETE FROM `registration form` WHERE ID='$ID'";
     $query = mysqli_query($con,$delquery); 
     if($query){
        ?>
        <script>
        alert("Delete successful");
        </script>
        <?php
        header("location: read.php");
     }  
     else {
        ?>
        <script>
        alert("Delete not successful");
        </script>
        <?php
        header('location: read.php');
     }   
     
     ?>