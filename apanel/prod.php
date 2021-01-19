<html>
<body>

<h2>KPT</h2>

<form method="POST" enctype="multipart/form-data">
  
  <br>
   Name:<br>
  <input type="text" name="name" required placeholder="Material">
  <br><br>
  Price:<br>
  <input type="text" name="price" placeholder="Price " required>
  <br>
  <br>
  Image:<br>
  <input type="file" name="image" required><br><br>
  <input type="submit" value="Submit" name="Submit">
</form> 



</body>
</html>



<?php 
isset($_POST['Submit']);
$name=$_POST['name'];
$image=$_POST['image'];
$images = 'uploads/';
$uploadfile = $images . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
$price=$_POST['price'];
$conn=mysqli_connect("localhost","id8733186_kpt_user","fake1234","id8733186_kpt");
$ins="INSERT INTO `product_img`(`name`,`image`,`price`) VALUES ('$name','$image','$price')";

if(mysqli_query($conn,$ins ))
echo "inserted successfully";
else
echo "Not inserted";

?>
