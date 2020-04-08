<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $name = mysqli_real_escape_string($connectdata,$_POST['user_name']);
    $password = mysqli_real_escape_string($connectdata,$_POST['user_pass']);


    if ($name != "" && $password != ""){

        $sql_query = "select count(*) as countUser from users where username='".$name."' and password='".$password."'";
        $data= mysqli_query($connectdata,$sql_query);
        $rows = mysqli_fetch_array($data);

        $countRows = $rows['countUser'];

        if($countRows > 0){
            $_SESSION['name'] = $name;
            Echo "password matched";
        }else{
            echo "Invalid username OR password";
        }

    }

}
?>
<html>
    <style>
    figure{background:yellow; border: 1px solid black; margin-left:auto; margin-right:auto; width: 40%;padding: 1%;}
    </style>    
    <body>
        <div class="container">
            <form method="post" action="">
                    <figure>    
                    <h1><center>Login Page</center></h1>
                    </figure>
                    <div>
                        <input type="text" class="textbox" id="user_name" name="user_name" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="user_pass" name="user_pass" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>