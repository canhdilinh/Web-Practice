<?php        ?>
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
   
    
        <?php 
include "link.php"; 
include "dbcon.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Name =$_POST['formName'];
    $Email =$_POST['formEmail'];
    $Class =$_POST['formClass'];
    $Section =$_POST['formSection'];
    $Subject =$_POST['formSubject'];
    $Language =$_POST['formLanguage'];
    $Gender =$_POST['formGender'];

    $insertquery = "INSERT INTO `registration form` (`Name`, `Email`, `Class`, `Section`, `Subject`, `language`, `Gender`) VALUES ('$Name', '$Email', '$Class', '$Section', '$Subject', '$Language', '$Gender')";
       $query = mysqli_query($con,$insertquery);



if($query){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Your record has been inserted successfully
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>×</span>
            </button>
          </div>";
        }
         }  
          ?>
        <div class="title">Registration Form</div>
        <div class="content">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method='POST'>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="formName" value = "" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="email@example.com" name="formEmail" value = "" required>
                    </div>


                    <div class="input-box">
                        <span class="details">Class</span>
                        <input type="text" placeholder="Enter your class" name="formClass" value = "" required>
                    </div>
                    <div class="input-box">
                    <span class="details">Section</span>
                    <select class="form-control" name = "formSection" >
                        <option selected>Choose...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Subject</span>
                        <input type="text" placeholder="Enter subject name" name="formSubject" value = "" required>
                    </div>
                    <div class="input-box">
                    <span class="details">Language</span>
                    <select class="form-control" name = "formLanguage">
                        <option selected>Choose...</option>
                        <option>Urdu</option>
                        <option>English</option>
                    </select>
                    </div>
                </div>
                <div class="input-box ">
                <span class="details">Gender</span>
                    <select class="form-control" name = "formGender">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                    <a href="read.php"><button type="button" class="btn btn-secondary">Check Users</button></a>
            </form>
        </div>
    </div>
</body>

</html>