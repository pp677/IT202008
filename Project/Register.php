<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(	   isset($_POST['email']) 
	&& isset($_POST['password'])
	&& isset($_POST['confirm'])
	){
	$pass = $_POST['password'];
	$conf = $_POST['confirm'];
	if($pass != $conf){
		//echo "Registering user'";
		
		$msg = "Please carefully type again!!";
	}
	else{
		$msg = "You are registered!!";
		//let's hash it
		$pass = password_hash($pass, PASSWORD_BCRYPT);
		//echo "<br>$pass<br>";
		//it's hashed
		require("config.php");
		$connection_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
		try {
			$db = new PDO($connection_string, $username, $password);
			$stmt = $db->prepare("INSERT INTO `Users3`
							(email, password) VALUES
							(:email, :password)");
			$email = $_POST['email'];
			$params = array(":email"=> $email, 
						":password"=> $pass);
			$stmt->execute($params);
			//echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
		}
		catch(Exception $e){
			//echo $e->getMessage();
			exit();
		}
	}
	
}
?>
<html>
	<head>
		<title>My Project - Register</title>
		
	</head>
	<body onload="findFormsOnLoad();">
		<!-- This is how you comment -->
		<form name="regform" id="myForm" method="POST"
					onsubmit="return doValidations(this)">
			<div>
				<label for="email">Email: </label><br>
				<input type="email" id="email" name="email" placeholder="Enter Email"/>
				<span id="email_error"></span>
			</div>
			<div>
				<label for="pass">Password: </label><br>
				<input type="password" id="pass" name="password" placeholder="Enter password"/>
			</div>
			<div>
			<label for="conf">Confirm Password: </label><br>
				<input type="password" id="conf" name="confirm"/>
				<span id="password_error"></span>
			</div>
			<div>
				<div>&nbsp;</div>
				<input type="submit" value="Register"/>
			</div>
		</form>
		<?php if(isset($msg)):?>
			//<span><?php echo $msg;?></span>
		<?php endif;?>
	</body>
</html>