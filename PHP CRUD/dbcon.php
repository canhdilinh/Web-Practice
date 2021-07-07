<?php 
$con = mysqli_connect("localhost","root","","crud");
if(!$con){
    ?>
    <script>
    alert("Connection not successful");
    </script>
    <?php
}
?>
