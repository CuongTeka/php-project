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
				case 'danhmuc':
                    include "";
                    break;

				default:
					include "body.php";
					break;
			}
		}
		else
		{
			include "body.php";
		}
		
		include "footer.php";
?>