<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <style>
        <?php include "CSS/style.css";
        ?>
    </style>
</head>
<body>
<table  class="table" id="mytable">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Class</th>
      <th>Section</th>
      <th>Subject</th>
      <th>Language</th>
      <th>Gender</th>
      <th >Operation</th>
    </tr>
  </thead>
  <tbody>
  <?php include "link.php"; 
       include "dbcon.php";
 
  $readquery = "SELECT * FROM `registration form`";
     $query = mysqli_query($con,$readquery);   
    //  $sno=0;      
     while($result=mysqli_fetch_assoc($query)){
      //  $sno=$sno+1;
     ?>
    <tr>
               <!-- <th> <?php echo $sno;?> we can use $sno  </th> -->
               <th> <?php echo $result['ID'];?> </th>
               <!-- database name in [] -->
               <td><a href="update.php?id=<?php echo $result['ID'];?>"><?php echo $result['Name'];?></a></td>     
               <td><?php echo $result['Email'];?></td>
               <td><?php echo $result['Class'];?></td>
               <td><?php echo $result['Section'];?></td>
               <td><?php echo $result['Subject'];?></td>
               <td><?php echo $result['Language'];?></td>
               <td><?php echo $result['Gender'];?></td>
               <td><a href="update.php?id=<?php echo $result['ID'];?>"><i class="fas fa-edit"></i></a>/<a href="delete.php?id=<?php echo $result['ID'];?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <?php
}

?>
</tbody>
</table>

</body>
</html>