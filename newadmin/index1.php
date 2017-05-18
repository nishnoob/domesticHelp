<?php 
	if(session_start())
		session_destroy();
	header('Location: login1.php');

?>
<!-- <html>
       <head>
             <title> Domestic Help Application</title>
			   <link rel="stylesheet" type="text/css" href="style.css" />
			   </head>
<script>

</script>
       <body>
  <div align="right">
				<form action = 'login1.php' method = 'post' class="frm" >
					 <input type = 'submit'  name = 'submit' value = 'Login' class="submit" >	

					 
       </body >
</html >  -->

    