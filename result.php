
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
            .results{
            	margin:5%;
            }
	</style>
</head>
<body bgcolor="lightblue">
          <form action="result.php" method="get">
             	<span><b>Write Your Keyword<b></span> 
             	<input type="text" name="user_keyword" size="120">
            	
            <input type="submit" name="search" value="search now">
             </form>
<button><a href="search.html">Go Back</a></button>
<?php

$con=mysqli_connect("localhost","root","","search");
     mysqli_select_db($con,"search");

                       if(isset($_GET['search'])){
                       	$get=$_GET['user_query'];

                       

                        if($get==''){
                        	echo "<br><centre><b>Go back and Write something in the search box</b></centre>";
                        	exit();
                        }




             $result_query="SELECT * from sites where site_keywords like '%$get%' ";

             $run_result = mysqli_query($con,$result_query);

if(mysqli_num_rows($run_result)<1){
	echo "<br><centre><b>Oops Nothing was found</b></centre>";
                        	exit();
}

             while($row_result=mysqli_fetch_array($run_result)){

                  $site_title=$row_result['site_title'];
                  $site_link=$row_result['site_link'];
                  
                  $site_desc=$row_result['site_desc'];
                  $site_image=$row_result['site_image'];
             
                    
            echo "<div class='results'>
                    
                   <h2>$site_title</h2>
                   <a href='$site_link'>$site_link</a>
                   <p align='justify'>$site_desc</p>
                   <img src='images/$site_image' width='100' height='100' />



            </div>";
        }
        } 
?>

</body>
</html>