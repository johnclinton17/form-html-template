<?PHP
 ob_start();
session_start();
if($_REQUEST['txt_st'] == "")
{

$get_name = $_POST['name'];
$get_email = $_POST['email'];
$get_mobile = $_POST['phone'];
$get_website =$_POST['url'];
$get_from =$_POST['migrationfrom'];
$get_to =$_POST['migrationto'];


								
								$to	  = "john@niyati.com";
								//$cc	  = "ramesh@niyati.com";
								
								$from = 'noreply@niyati.website'; $get_email;
								$sub  = "Kryptos ";
								$headers = "From: $from \r\n";
								//$headers .= "CC: $cc \r\n";
								$headers .= "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";	
								 ?>	
									
						<?PHP  
                                  include("betaaccess-mailers.php");
										$message = ob_get_contents();
									ob_end_flush();	?>
						<?PHP 
								$ok = mail($to,$sub,$message,$headers);	
                                if($ok)
                                {
                                $_SESSION['msg'] ='success';
                                }
                                else
                                {
                                  $_SESSION['msg'] ='error';    
                                }
                                ?>


                                
<?php } ?>
<?PHP
 ob_start();
session_start();
if($_REQUEST['txt_st'] == "")
{


								
								$to	  = $get_email;
								//$cc	  = "ramesh@niyati.com";
								
								$from = 'noreply@niyati.website'; $get_email;
								$sub  = "Kryptos ";
								$headers = "From: $from \r\n";
								//$headers .= "CC: $cc \r\n";
								$headers .= "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";	
								 ?>	
									
						<?PHP  
                                  include("thankyou-mailers.php");
										$message = ob_get_contents();
									ob_end_flush();	?>
						<?PHP 
								$ok = mail($to,$sub,$message,$headers);	
                                if($ok)
                                {
                                $_SESSION['msg'] ='success';
                                }
                                else
                                {
                                  $_SESSION['msg'] ='error';    
                                }
                                ?>


                                
<?php } ?>
