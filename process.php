<?php

if(isset($_POST['submit']))
		{
				$Name=$_POST['name'];
                $Email=$_POST['email'];
                $Ph=$_POST['[phone]'];
                $Msg=$_POST['message'];
                $Service=$_POST['Service'];	
			if(empty($Name)|| empty($Email) || empty($Ph) || empty($Msg) || empty($Service) ||)
			{
                 header('location:index1.php?error');      
			}
			else 
			{
				$to="info@itworldtechs.in";

				if(mail($to,$Ph,$Email,$Msg))
				{
					header('location:index1.php?success');	
				}
			}
			}
			else
			{
				header("location:index1.php");
			}
?>