<!DOCTYPE html>
<html>
<head>
	<title>search engine</title>
</head>
<body bgcolor="grey">
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<table bgcolor="orange" width="500" border="2" cellspacing="2" align="center">
			<tr>
				<td colspan="5"><h2>Inserting new website:</h2></td>
			</tr>
			<tr>
				<td>site title:</td>
				<td><input type="text" name="site_title"></td>
			</tr>
			<tr>
				<td>site link:</td>
				<td><input type="text" name="site_link"></td>
			</tr>
			<tr>
				<td>site keywords:</td>
				<td><input type="text" name="site_keywords"></td>
			</tr>
			<tr>
				<td>site description:</td>
				<td><textarea cols="18" rows="8" name="site_desc"></textarea></td>
			</tr>
			<tr>
				<td>site image:</td>
				<td><input type="file" name="site_image"></td>
			</tr>
			<tr>
				<td colspan="5"><input type="submit"  name="submit" value="Add site now"></td>
			</tr>
			
		</table>
	</form>

</body>
</html>

<?php
     $con=mysqli_connect("localhost","root","","search");
     mysqli_select_db($con,"search");

     

     if(isset($_POST['submit'])){
         
        $site_title = $_POST['site_title'];    
        $site_link = $_POST['site_link'];
        $site_keywords = $_POST['site_keywords'];
        $site_desc = $_POST['site_desc'];
        $site_image = $_FILES['site_image']['name'];
        $site_image_tmp = $_FILES['site_image']['tmp_name'];

        if($site_title==" " OR $site_link==" " OR $site_keywords==" " OR $site_desc==" "){
     	echo "<script>alert('please fill all the fields')</script>";

     	exit();
     }
     else{

        $insert_query = "insert into sites (site_title,site_link,site_keywords,site_desc,site_image) values('$site_title','$site_link','$site_keywords','$site_desc','$site_image')";

        move_uploaded_file($site_image_tmp,"images/{$site_image}");

        if(mysqli_query($con,$insert_query)){
        	echo "<script>alert('data inserted in to table')</script>";
        }
    }
        }


?>

