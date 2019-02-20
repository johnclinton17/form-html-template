<?PHP
 ob_start();
session_start();
if($_REQUEST['txt_st'] == "")
{

$get_name = $_POST['name'];
$get_name1 = $_POST['name1'];
$get_email = $_POST['email'];
$get_email1 = $_POST['email1'];
$get_mobile = $_POST['phone'];
$get_mobile1 = $_POST['phone1'];
$get_website =$_POST['url'];
$get_website1 =$_POST['url1'];
$get_from =$_POST['migrationfrom'];
$get_from1 =$_POST['migrationfrom1'];
$get_to =$_POST['migrationto'];
$get_to1 =$_POST['migrationto1'];


								
								$to	  = "john@niyati.com";
								//$cc	  = "ramesh@niyati.com";
								
								$from = 'noreply@niyati.website'; $get_email;$get_email1;
								$sub  = "Kryptos ";
								$headers = "From: $from \r\n";
								//$headers .= "CC: $cc \r\n";
								$headers .= "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";	
								 ?>	
									
						<?PHP  
                                  include("admin-mailers.php");
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
								
								$from = 'noreply@niyati.website'; $get_email;$get_email1;
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
