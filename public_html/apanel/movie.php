<html>
<body>
<center>
<h2>JayKay's Hub</h2>

<form method="POST" enctype="multipart/form-data">
  <br>
   Type:<br>
  <select name="type">
    <option value="1">Movie</option>
    <option value="2">Webseries</option>
    <option value="3">NetFlix</option>
  </select>
  <br>
  <!-- WebSeries:<br>-->
  <!--<select name="webseries">-->
  <!--  <option value="1" >Yes</option>-->
  <!--  <option value="0">No</option>-->
  <!--</select>-->
  
  <br>
   Name:<br>
  <input type="text" name="name" required placeholder="Movie/Series Name">
  <br><br>
 About:<br>
  <input type="text" name="about" placeholder="About " required>
  <br>
  <br>
  Link:<br>
  <input type="text" name="link" placeholder="Link " required>
  <br>
  <br>
  Image:<br>
  <input type="file" name="image1" required><br><br>
  <input type="submit" value="Submit" name="Submit">
</center></form> 
</body>
</html>


<?php 
if (isset($_POST['Submit'])){
$name=$_POST['name'];
// $webseries=$_POST['webseries'];
$type=$_POST['type'];
$image = $_FILES['image1']['name'];
$fileElementName = 'image1';
$path = '../assets/img/'; 
$location = $path . $_FILES['image1']['name']; 
move_uploaded_file($_FILES['image1']['tmp_name'], $location); 
$about=$_POST['about'];
$link=$_POST['link'];
// error_reporting( ~E_DEPRECATED & ~E_NOTICE);
//     // but I strongly suggest you to use PDO or MySQLi.

//     $DBHOST= "localhost";
//     $DBUSER= "thejayka_user";
//     $DBPASS= "fake1234";
//     $DBNAME= 'thejayka_jaykay';
$conn=mysqli_connect("localhost","thejayka_user","fake1234","thejayka_jaykay");
$ins="INSERT INTO `movies`(`name`,`image`,`about`,`link`,`type`) VALUES ('$name','$image','$about','$link','$type')";
if(mysqli_query($conn,$ins))
echo"<center><h1>Inserted successfully</h1></center>";
else
echo "<center>Not inserted</center>";
// mysqli_query($conn,$ins);
}
?>
