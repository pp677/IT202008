 <html>
	<head>
		<title>My Project - Register</title>
		<script>
			funtion doValidations(form){
				let isValid = true;
				if(!verifyEmail(form)){
					isValid = false;
				}
				if( !verifyPassword(form){
					isValid = false;
				}
				return isValid;
			}
			function findFormsOnLoad(){
				let myForm = document.form.reform;
				let mySameForm = document.getElementById("myForm");
				console.log("Form by name", myForm);
				console.log("Form by id", mySameForm);
			}
			function verifyEmail(form){
				let ee = document.getElementById("Email Error");
				if(form.email.value.trim().length == 0)
					ee.innerText = "Please enter an Email Address";
					return false;
				}
				else{
					ee.innerText = "";
					return true;
				}
			}
			function verifyPassword(form){
				if(form.password.value.length == 0 ||form.confirm.value.length == 0){
					alert("Must type type both passwords correctly");
					return false;
				}
				if(forms.password.value != form.confirm.value){
					alert("uhh dumbass typo");
					return false;
				}
				

				return true;
			
			}
		</script>
	</head>
	<body onload- "findFormsOnLoad();>
		<form name="regform" id="myForm" method="POST"
				onsubmit "return verfyPassword(this)">
			<!-- comment -->
			<label for ="email" > Email: </label>
			<input type="email" id="email"name"email" placeholder="Enter Email"/>
			<label for = "pass">Password:</label>
			<input type="password" id="pass" name"password" placeholder = "Enter password"/>
			
			<label for = "conf"> Password:</label>
			<input type="Confirm password" id="pass" name"confirm password" placeholder ="Confirm password"/>
			<input type="submit" value="Register"></input>
		

		
		</form>
	</body>
</html>
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
	if($pass == $conf){
		echo "Regsitering'";
	}
	else{
		echo "Please check your pass again";
		exit();
	}
	//let's hash it
	$pass = password_hash($pass, PASSWORD_BCRYPT);
	echo "<br>$pass<br>";
	//it's hashed
	require("config.php");
	$connection_string = "mysql:host=$dbhost;dbname=$dbdatabase;charset=utf8mb4";
	try {
		$db = new PDO($connection_string, $dbuser, $dbpass);
		$stmt = $db->prepare("INSERT INTO `Users3`
                        (email, password) VALUES
                        (:email, :password)");
		$email = $_POST['email'];
        $params = array(":email"=> $email, 
					":password"=> $pass);
        $stmt->execute($params);
        echo "<pre>" . var_export($stmt->errorInfo(), true) . "</pre>";
	}
	catch(Exception $e){
		echo $e->getMessage();
		exit();
	}
}
?>