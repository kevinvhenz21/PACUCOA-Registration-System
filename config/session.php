<?php
session_start();

	function confirm_loggedin(){
			if(!isset($_SESSION['p_user']) AND (!isset($_SESSION['p_user_id']))) {
						header("location: ../login.php");
				}
		}	
?>