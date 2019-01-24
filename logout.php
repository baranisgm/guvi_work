<?php 
  require('layout/header.php');
?>
  <body>
    <div class="container">
      <h2>User logout</h2><br/>
      <form method="post" action="userlogout.php">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" name="but_logout">Submit</button>
          </div>
        </div>
      </form>
    </div>
<?php 
  require('layout/footer.php');
?>

 