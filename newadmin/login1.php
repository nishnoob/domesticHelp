<html> 
<head> 
<title>Admin Login</title> 
<!--<link href="style-Nav.css" rel="stylesheet" type="text/css"> -->
<link href="style-tab.css" rel="stylesheet" type="text/css">
</head> 
<body id="body-color"> 

<div align="right">
    <form action = '../index.html' method = 'post' class="frm" >
         <input type = 'submit' name = 'submit' value = 'Home' class="submit" >
     </form>
</div>
<form method="POST" action="admin1.php"> 
<table class="t1" >

<tr>
<td>User Name  :</td>
<td>  <input type="text" name="admin_name" required id="username" placeholder="Admin Name" size="30"></td>
</tr>
<tr>
<td>
Password  :</td>
<td>  <input type="password" name="admin_pass" required id="password" placeholder="Password" size="30"></td>
</tr>
<tr>
<td colspan="2">
<center>

<input type="submit" class="button" value="login" name="admin_login" > 
</center>
</td>
</tr>


</table>

</form> 
</body> 
</html>
<?php  
      
    //$dbcon=mysqli_connect("localhost","root","") or die(mysql_error()); 
	//mysqli_select_db($dbcon,"blog") or die(mysql_error());

	//include("Db_conection.php");  
      
    if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
    {  
        $admin_name=$_POST['admin'];  
        $admin_pass=$_POST['admin'];  
      
       // $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
      
       // $run_query=mysqli_query($dbcon,$admin_query);  
		
        if($admin_name=="admin" && $admin_pass=="admin")  
        {  
			session_start();
			$_SESSION['adminusername']=$admin_name;
            echo "<script>window.open('a11.php','_self')</script>";  
        }  
        else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
      
    }  
      
    ?>  