<?php include "link.php"; 
 
 
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title> Registration Form</title>
    <style>               
        <?php include "CSS/style.css";
        ?>
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Update Record</div>
        <div class="content">
            <form action="" method='POST'>
                <div class="user-details">
                <?php 
                include "dbcon.php";
                $ID=$_GET['id'];
               $readquery = "SELECT * FROM `registration form` WHERE ID='$ID'";
               $query = mysqli_query($con,$readquery);
               $result=mysqli_fetch_assoc($query);

               if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $Name =$_POST['formName'];
                $Email =$_POST['formEmail'];
                $Class =$_POST['formClass'];
                $Section =$_POST['formSection'];
                $Subject =$_POST['formSubject'];
                $Language =$_POST['formLanguage'];
                $Gender =$_POST['formGender'];
                $updatequery = "UPDATE `registration form` SET `Name`='$Name',`Email`='$Email',`Class`='$Class',`Section`='$Section',`Subject`='$Subject',`Language`='$Language',`Gender`='$Gender' WHERE ID='$ID'";
                $query = mysqli_query($con,$updatequery);
                if($query){
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Your record has been updated successfully
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>×</span>
                    </button>
                  </div>";
                   
                 }  
                 else {
                    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> Your record has not been update successfully
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>×</span>
                    </button>
                  </div>";      }   
                  
               }
        ?>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="formName" value = "<?php echo $result['Name'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="email@example.com" name="formEmail" value = "<?php echo $result['Email'];?>" required>
                    </div>


                    <div class="input-box">
                        <span class="details">Class</span>
                        <input type="text" placeholder="Enter your class" name="formClass" value = "<?php echo $result['Class'];?>" required>
                    </div>
                    <div class="input-box">
                    <span class="details">Section</span>
                    <select class="form-control" name = "formSection" value = "">
                    
                    
                    <option <?php if($result['Section'] == 'Choose...')echo 'selected'; ?>> Choose... </option> 
                    <option <?php if($result['Section'] == 'A')echo 'selected'; ?>> A </option> 
                    <option  <?php if($result['Section'] == 'B')echo 'selected';  ?>> B </option> 
                    <option <?php if($result['Section'] == 'C') echo 'selected';  ?>> C </option> 
                    
                    </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Subject</span>
                        <input type="text" placeholder="Enter subject name" name="formSubject" value = "<?php echo $result['Subject'];?>" required>
                    </div>
                    <div class="input-box">
                    <span class="details" >Language</span>
                    <select class="form-control" name = "formLanguage" value = "" >
                    <option <?php if($result['Section'] == 'Choose...')echo 'selected'; ?>> Choose... </option> 
                    <option <?php if($result['Language'] == 'Urdu')echo 'selected'; ?>> Urdu </option> 
                    <option  <?php if($result['Language'] == 'English')echo 'selected';  ?>> English </option>  
                    </select>
                    </div>
                </div>
                <div class="input-box ">
                <span class="details">Gender</span>
                    <select class="form-control" name = "formGender" value = "">
                    <option <?php if($result['Section'] == 'Choose...')echo 'selected'; ?>> Choose... </option> 
                    <option <?php if($result['Gender'] == 'Male')echo 'selected'; ?>> Male </option> 
                    <option  <?php if($result['Gender'] == 'Female')echo 'selected';  ?>> Female </option> 
                    <option  <?php if($result['Gender'] == 'Other')echo 'selected';  ?>> Other </option> 
                    </select>
                    <div class="button">
                        <input type="submit" value="Update">
                    </div>
                    <a href="read.php"><button type="button" class="btn btn-secondary">Check Users</button></a>
            </form>
        </div>
    </div>
</body>

</html>