<!DOCTYPE HTML>
<html>

<head>
  <title>log_in</title>
  <link rel="stylesheet" type="text/css" href="style.css" title="style" />
</head>
<script>  
function validateform(){
			
		var x = document.getElementById("category").value;
		var re=/^[\w ]+$/;
		if (x == null || x == "") {
        		alert(" subject must be filled out");
				myForm2.name.focus();

        		return false;
   			}
		if(!re.test(x))
			{
				alert("Error:subject contains INVALID characters");
				myForm2.name.focus();
				return false;
			}
			 x = document.getElementById("firstName").value;
		if (x == null || x == "") {
        		alert(" firstName must be filled out");
				myForm2.name.focus();

        		return false;
   			}
		if(!re.test(x))
			{
				alert("Error:author contains INVALID characters");
				myForm2.name.focus();
				return false;
			}
		x = document.getElementById("serviceArea").value;
		if (x == null || x == "") {
        		alert(" serviceArea must be filled out");
				myForm2.serviceArea.focus();

        		return false;
   			}
		x = document.getElementById("desc").value;
		if (x == null || x == "") {
        		alert(" description must be filled out");
				myForm2.desc.focus();

        		return false;
   			}
			
			return true;
		
			
			
}
	</script>

<body>
	   <div align="right">
				<form action = 'index1.php' method = 'post' class="frm" >
					 <input type = 'submit' name = 'submit' value = 'LogOut' class="submit" >
				 </form>
		</div>

	<div class="login" ><center>
	<h2 style="color:white; background-color:royalblue">INFORMATIONS</h2>
    <form method="post" class="form_settings" name="myForm2" onsubmit="return validateform()" action="upload1.php" enctype="multipart/form-data">
	

		<input type="text"  id="category" name="category" placeholder="category*" required="required" maxlength="50"/><br><br>
		<input type="text"  id="firstName" name="firstName" placeholder="firstName*" required="required" maxlength="50" /><br><br>
		<input type="text"  id="lastName" name="lastName" placeholder="lastName*" required="required" maxlength="50" /><br><br>
        <textarea rows="3" cols="75" name="desc" id="desc" placeholder="Write description here..." maxlength="100"></textarea>		
        <input type="text"  id="serviceArea" name="serviceArea" placeholder="serviceArea*" required="required" maxlength="100" /><br><br>
		
		<input type="submit"  class="submit1" value="UPLOAD" name="submit" >
    </form>
        
</center>
</div>
</body>
</html>
