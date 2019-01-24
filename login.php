<?php 
  require('layout/header.php');
  session_start();
?>

  <body>
    <div class="container">
      <h2>User login</h2><br/>
      <form method="post" action="checklogin.php" id="userLoginForm">
      
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Email">Email<span class="required">*</span></label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Password">Password<span class="required">*</span></label>
            <input type="password" class="form-control" name="userpassword" placeholder="Password">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:20px">
            <button type="submit" class="btn btn-success" name="sub">Submit</button>
          </div>
        </div>
      </form>
    </div>

<?php 
  require('layout/footer.php');
?>

 