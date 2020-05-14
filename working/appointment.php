<?php
    require_once ('header.php');
    require_once('config2.php');
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

        $fullname = $_POST['fullname'];
        $phnum = $_POST['phnum'];
        $addr = $_POST['addr'];

        $sql = "INSERT INTO appointment(fullname, phnum, addr)VALUES(?,?,?)";
        $stmtinsert =$db->prepare($sql);
        $result = $stmtinsert->execute([$fullname, $phnum, $addr]);
      }
      ?>
  </div>
  <div>
    <form action="appointment.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-sm-3"
          <div>
            <h1>Make an appintment</h1>
            <p>Fill up the form with correct values.</p>
            <hr class="mb-3">

            <input class="form-control" type "text" name="fullname" placeholder="Full name" required>
            <input class="form-control" type "text" name="phnum" placeholder="Phone Number" required>
            <input class="form-control" type "text" name="addr" placeholder="Address" required>

            <hr class="mb-3">
            <input class ="btn btn-primary" type="submit" name="create" value"Sign Up">
            <a href="finalV.php" class="navbar-Appointment">Already Registered?</a>
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
