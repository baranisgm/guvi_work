<?php 
	require('layout/header.php');
?>
  <div class="container">
    <h2>User resigter</h2><br/>
    	<form method="post" action="register.php" id="userRegisterForm" >
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name<span class="required">*</span></label>
            <input type="text" class="form-control" name="name" placeholder="User Name">
          </div>
        </div>
      	<div class="row">
	      	<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Email">Email<span class="required">*</span></label>
	          <input type="text" class="form-control" name="email" placeholder="User Email">
	        </div>
	      </div>
   			<div class="row">
      		<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Password">Password<span class="required">*</span></label>
	          <input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="Password">
	        </div>
	      </div>
	      <div class="row">
      		<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="ConfirmPassword">Confirm Password<span class="required">*</span></label>
	          <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
	        </div>
	      </div>
	      <div class="row">
	      	<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Degree">Degree</label>
	          <input type="text" class="form-control" name="degree" placeholder="Degree">
	        </div>
	      </div>
	      <div class="row">
      		<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Gender">Gender</label>
	          <select class="form-control" name="gender">
	          	<option value="">Select Gender</option>
	          	<option value="male">Male</option>
	          	<option value="female">Female</option>
	          </select>
	        </div>
	      </div>
   			<div class="row">
      		<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Number">Mobile Number<span class="required">*</span></label>
	          <input type="text" class="form-control" name="number" placeholder="Mobile Number" onkeypress="return isNumber(event)">
	        </div>
	      </div>
	      <div class="row">
      		<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Location">Location</label>
	          <input type="text" class="form-control" name="location" placeholder="Location">
	        </div>
	      </div>
	      <div class="row">
      		<div class="col-md-4"></div>
	        <div class="form-group col-md-4">
	          <label for="Gender">Age:</label>
	          <input type="text" class="form-control" name="age" placeholder="Age" onkeypress="return isNumber(event)">
	        </div>
	      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:20px">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
<?php 
	require('layout/footer.php');
?>
