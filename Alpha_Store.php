<?php

	//session_start();
	ob_start();
	//include "../util/db.php";
	date_default_timezone_set('Asia/Ho_Chi_Minh');

		include "header.php";
		
		if(isset($_GET['act']))
			{
				switch ($_GET['act'])
				{
					case 'logout':
						if(isset($_SESSION['role']))
							{
								unset($_SESSION['role']);
								unset($_SESSION['user']);
							}
						header('location: Alpha_Store.php');
						break;
					case 'profile':
                        
						//-----
						include "profile.php";
						break;
					default:
						
						break;
				}
				
			}
		else
		{
			include "body.php";
		}
		
		include "footer.php";
?>