<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div>
    <?php
      if(isset($_POST['create'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        $sql = "INSERT INTO users(username, password, type)VALUES(?,?,?)";
        $stmtinsert =$db->prepare($sql);
        $result = $stmtinsert->execute([$username, $password, $type]);
      }
      ?>
  </div>
  <div>
    <form action="AUnclia.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-sm-3"
          <div>
            <h1>Registration</h1>
            <p>Fill up the form with correct values.</p>
            <hr class="mb-3">

            <input class="form-control" type "text" name="username" placeholder="Username" required>
            <input class="form-control" type "text" name="password" placeholder="Password" required>
            <input class="form-control" type "text" name="confirmpassword" placeholder="Confirm Password" required>

            <div class="form-group lead">
              <label for"type">Please select one :</label>
              <div></div>
              <input type="radio" name ="type" value="client"
              class="custom-radio" required>&nbsp;Client

              <input type="radio" name ="type" value="Seller"
              class="custom-radio" required>&nbsp;Seller
              <input type="radio" name ="type" value="Doctor"
              class="custom-radio" required>&nbsp;Doctor
            </div>
            <hr class="mb-3">
            <input class ="btn btn-primary" type="submit" name="create" value"Sign Up">
            <a href="login.php" class="navbar-Appointment">Already Registered?</a>
          </div>
        </div>
      </div>
    </form>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(function(){
    alert('hello')
  })
</body>
</html>
