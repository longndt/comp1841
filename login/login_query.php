<?php
	session_start();

	require_once 'conn.php';

	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			// md5 encrypted
			// $password = md5($_POST['password']);
			$password = $_POST['password'];
    		$password = md5($password);
			$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			//case 1: login succeed => create session and redirect to homepage
			if($row > 0) {
				$_SESSION['user'] = $fetch['mem_id'];
				header("location: home.php");
			} else{
				//case 2: login failed => display error message by JavaScript
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
?>