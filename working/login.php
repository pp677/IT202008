<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
	$pass = $_POST['password'];
	$email = $_POST['email'];

	require("config.php");
	$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
	try {
		$db = new PDO($connection_string, $dbuser, $dbpass);
		$stmt = $db->prepare("SELECT username, password from `Users` where username = :username LIMIT 1");

        $params = array(":username"=> $username);
        $stmt->execute($params);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
		if($result){
			$password = $result['password'];
			if(password_verify($pass, $userpassword)){
				$id = $result['id'];
				echo "You logged in with id of " . $id;
				//echo "<pre>" . var_export($result, true) . "</pre>";
				$stmt = $db->prepare("SELECT r.id, r.types from `Roles` r JOIN `UserRoles` ur on r.id = ur.role_id where ur.user_id = :id");
				$stmt->execute(array(":id"=>$id));
				$roles = $stmt->fetchAll(PDO::FETCH_ASSOC);
				if(!$roles){
					$roles = array();
				}
				$user = array(
					"id" => $id,
					"email"=>$result['email'],
					"roles"=> $roles);
				$_SESSION['user'] = $user;
				echo "Session: <pre>" . var_export($_SESSION, true) . "</pre>";
			}
			else{
				echo "Failed to login, invalid password";
			}
		}
		else{
			echo "Invalid email";
		}
	}
	catch(Exception $e){
		echo $e->getMessage();
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>

</form>
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div>
    <form action="docView.php" method="post">
      <div class="container">
        <div class"row">
          <div class="col-sm-3"
          <div>
            <h1>Login</h1>
            <hr class="mb-1">
            <p>Fill up the form with correct values.</p>
            <hr class="mb-3">

            <input class="form-control" type "text" name="username" placeholder="Username" required>
            <input class="form-control" type "text" name="password" placeholder="Password" required>

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
            <a href="projectv2.php" class="navbar-new">New User?</a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-DgpCb/KJQ1LNf0u91ta32o/NMZx1twRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
  <script type="text/javascript" src="https:stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
