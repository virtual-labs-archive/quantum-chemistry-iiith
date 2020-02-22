<?php
	
	if($name == "ammonia")
	{
//		echo "veera reddy";
		
		if($file_index ==0)
		{
			if($_POST['mol']!="N")
			{
				$err_message = "Wrong , try Again ";
			}
			else
			{
				$message = "Correct Selection";
				$correct_selection=1;
			}
			
		}
		else if($file_index ==1)
                {
                        if($_POST['mol']!="H" )
                        {
                                $err_message = "Wrong , try Again ";
                        }
                        else
                        {
                                $message = "Correct Selection";
				$correct_selection=1;
                        }
                        
                }
		else if($file_index ==2)
                {
                        if($_POST['mol']=="H" && $_POST["number_1"]=="1" && $_POST["number_2"] == "2")
                        {
                                $message = "Correct Selection";
				$correct_selection=1;
                        }
                        else
                        {
                                $err_message = "Wrong , try Again ";
                        }

                }
		else if($file_index==3)
		{
		
			$myflag=false;
			if($_POST['mol']=="H" && $_POST["number_1"]=="1" && $_POST["number_2"] == "3" && $_POST["number_3"]== "2")
                        {
                                $message = "Correct Selection";
				$correct_selection=1;
				$myflag=true;
                        }
			if($_POST['mol']=="H" && $_POST["number_1"]=="1" && $_POST["number_2"] == "2" && $_POST["number_3"]== "3")
			{
                                $message = "Correct Selection";
				$correct_selection=1;
				$myflag=true;
			}
                        if(!$myflag)
                        {
                                $err_message = "Wrong ,try Again ";
                        }

		}

		

	}
	else if($name == "formaldehyde")
        {
                if($file_index ==0)
                {
                        if($_POST['mol']!="O")
                        {
                                $err_message = "Wrong , try Again ";
                        }
                        else
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }

                }
                else if($file_index ==1)
                {
                        if($_POST['mol']!="C" )
                        {
                                $err_message = "Wrong , try Again ";
                        }
                        else
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }

                }
                else if($file_index ==2)
                {
                        if($_POST['mol']=="H" && $_POST["number_1"]=="2" && $_POST["number_2"] == "1")
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }
                        else
                        {
                                $err_message = "Wrong , try Again ";
                        }

                }
                else if($file_index==3)
                {

                        if($_POST['mol']=="H" && $_POST["number_1"]=="2" && (($_POST["number_2"] == "1" && $_POST["number_3"]== "3")||(($_POST["number_2"] == "3" && $_POST["number_3"]== "1"))))
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }
                        else
                        {
                                $err_message = "Wrong ,try Again ";
                        }

                }



        }
	else if($name=="water")
	{
		  if($file_index ==0)
                {
                        if($_POST['mol']!="O")
                        {
                                $err_message = "Wrong , try Again ";
                        }
                        else
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }

                }
                else if($file_index ==1)
                {
                        if($_POST['mol']!="H" )
                        {
                                $err_message = "Wrong , try Again ";
                        }
                        else
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }

                }
                else if($file_index ==2)
                {
                        if($_POST['mol']=="H" && $_POST["number_1"]=="1" && $_POST["number_2"] == "2")
                        {
                                $message = "Correct Selection";
                                $correct_selection=1;
                        }
                        else
                        {
                                $err_message = "Wrong , try Again ";
                        }

                }
	
		
	}
?>

	
				
			
		
		

