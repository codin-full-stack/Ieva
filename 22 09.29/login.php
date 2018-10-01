     <?php include 'header.php'; ?> 

    <form method="POST" class="login">
<br><br>
        
        
        El.paštas:<br> 
        <br> 
        <input type="text" name= "email"<br> 
        <br>
        <br>

        Slaptažodis:<br> 
        <br>
        <input type="password" name= "password"br> 
        <br>
        <br>

        <br>
        <button type= "submit" name="submit">Prisijungti</button>
        <br>
        <br>
        <br>
        <br>
</form>

<?php

// MySqL login



if(! empty($_POST)) {

	
	if(empty($_POST['email'])) {
		echo 'ERROR: neįvestas email';
	} else {
		// užklausa
		$email = $_POST['email']; 

		$sql= "SELECT * FROM users WHERE email = '".$email ."' LIMIT 1";
		// execute MYSQL query
		$result = mysqli_query($con, $sql);
		// fetch data from query
		$user = mysqli_fetch_assoc($result);	
		// jeigu nori, pasižiūrėti var_dump();, turi naudoti po apačia		
		var_dump($user)	;	  					  
		//check if user exist
		if(! empty($user)) {
			$password = md5($_POST['password']);
			//compare pass posted to writed in DB
			if ($password == $user['password']){
				// setting session
				$_SESSION['id'] = $user['id'];
				//redirect to another page
				header('Location: profile.php');
				//exit - stop executing code
				exit;
			} else {
				echo "ERROR: neteisingas slaptažodis";
			}
		} else {
			echo 'ERROR: tokio vartotojo nėra';
		}

	}
}

include "footer.php"

?>



