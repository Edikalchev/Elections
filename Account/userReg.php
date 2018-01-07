 ?php
 		include_once('db.php');
 
		$email = $_POST['email'];
		$password = $_POST['password'];
 
		if(mysql_query("SELECT personID FROM users WHERE (username = '$email' AND password = '$password')"))
		  echo "Successfully Inserted";
		else
		  echo "Insertion Failed";
?>
