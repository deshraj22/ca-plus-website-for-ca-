<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="external.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="external.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    

   
</head>
<body>   
<?php include("header.php"); ?>
   <div class="container-fluid"><img src="images/cj.png" class="img-fluid" alt="Responsive image"></div>
   
    <div class="container-fluid carr form">

    <h2 class="hhh">APPLY NOW</h2>
<p class="if" style="text-align: center; font-family:roboto condensed,sans-serif; font-size:20px; color: #242B2E!important;
  text-shadow: 1px 1px 3px #6A1B4D;">If you are looking for an exciting role in Camwel Solution LLP, Kindly fill up the following details given below with your CV attached we will contact you</p>
    <form method="POST" action="carrier_backend.php">
  <div class="form-group form">
    <label for="exampleInputEmail1">FIRST NAME*</label>
    <input type="text" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" name="fname">
  
  </div>
  <div class="form-group form">
    <label for="exampleInputPassword1">LAST NAME*</label>
    <input type="text" class="form-control f_box" id="exampleInputPassword1" placeholder="last name" name="lname">
  </div> 
 

  
  <div class="form-group form">
    <label for="exampleInputEmail1">DATE OF BIRTH</label>
    <input type="date" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd-mm-yyyy" name="dob">
  
  </div>
  <label for="exampleInputEmail1" class="form-label form">EDUCATIONAL QUALIFICATION</label>
  <select class="form-select form-select-lg mb-3 f_box" aria-label=".form-select-lg example" style="width: 100%; height: 40px;" name="s1">
              <option selected>Select here</option>
              <option value="12th">12th</option>
              <option value="Diploma">Diploma</option>
              <option value="certification">certification</option>
              <option value="Graduation">Graduation</option>
              <option value="Post Graduate">Post Graduate</option>
            </select>
            <label for="exampleInputEmail1" class="form-label form">JOB PROFILE</label>
            <select class="form-select form-select-lg mb-3 f_box" aria-label=".form-select-lg example" name="s2" style="width: 100%; height: 40px;">
              <option selected>Select here</option>
              <option value="Charted Accountant">Charted Accountant</option>
              <option value="Company Secretary(cs)">Company Secretary(cs)</option>
              <option value="Auditor">Auditor</option>
              <option value="System Admin">System Admin</option>
            </select>
            <!-- <label for="exampleInputEmail1" class="form-label form">EXPERIENCE*</label>
    <select class="form-select form-select-lg mb-3 f_box" aria-label=".form-select-lg example" name="s3" style="width: 100%; height: 40px;">
              <option selected>Select here</option>
              <option value="yes">YES</option>
              <option value="no">NO</option>
            
            </select> -->

  <div class="form-group form">
    <label for="exampleInputEmail1">EXPERIENCE IN YEAR*</label>
    <input type="number" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Experience in years" name="ey">

  </div>
  <div class="form-group form">
    <label for="exampleInputEmail1">CURRENT LOCATION*</label>
    <input type="text" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Current location" name="loc">

  </div>
  <div class="form-group form">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <!-- <small id="emailHelp" class="form-text text-muted f_box">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group form">
    <label for="exampleInputEmail1">CONTACT NUMBER</label>
    <input type="tel" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="10 digits only" pattern="[0-9]{10}" name="cn">
  
  </div>
 
 <label for="exampleInputEmail1">SOLVE THE CAPTCHA</label>
  <div class="row">
<div class="col-md-6">
<div class="form-group">
  <?php

?>
<div class="container" style="background-color: black; height:37px; background-color:#CAD5E2;font-size:large;text-align:center"><?php $one=rand(1,100);
$two=rand(1,100); echo($one.'+'.$two.'='); 
 $sum=$one + $two;
 $_SESSION['sum']=$sum;?></div>
<!-- <input type="text" class="form-control bg-dark text-white text-center" id="disabledInput" type="number" value=" <?php echo($one).'+'.($two);?> ="  name="answer" > -->
</div>
</div>

<div class="col-md-6">
<div class="form-group">

<input type="number" name="uanswer" class="form-control" placeholder="?" required="required" data-error="Answer is required.">
</div>
<small id="emailHelp" class="form-text text-muted"><span id="cap">Fill the box above with right answer</span></small>


</div>
</div>
   
<div class="form-group form">
    <label for="exampleInputEmail1">Upload your cv/resume</label>
    <input type="file" class="form-control f_box" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="file">
     
  </div>

  <!-- <div class="container ser"><h5 class="card-title z"><input type="submit" name="submit"></h5></div> -->
  <!-- <button type="button" class="btn btn-info btn-lg btn-block" name="sub">LET'S GO<i class="fa fa-arrow-right" aria-hidden="true" style="font-size:22px; margin-left: 20px;"></i></button> -->
  <!-- <input type="submit" name="submit"> -->
 <input type="submit"  class="btn btn-info btn-lg btn-block form" style="font-size: 25px; font-weight:800" name="submit" value ="SUBMIT";>
</form>


    </div>
   
<!-- <div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control bg-dark text-white text-center" id="disabledInput" type="number" value=" 6 + 3 =" disabled>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="number" name="uanswer" class="form-control" placeholder="?" required="required" data-error="Answer is required.">
</div>
</div>
</div> -->

    </div>
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
