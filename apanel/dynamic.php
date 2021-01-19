<html lang="en">
  <head>
    <link rel="shortcut icon" href="../image/logo1.png" type="image/x-icon"/>
	<title>KailashPati Textiles</title>

    <link rel="stylesheet" href="../css/style.css">
  </head>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
              
            <form method="POST" class="bg-white p-5 contact-form" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Product Name" required="">
              </div>
              <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Product Price" required="">
              </div>
              <div class="form-group">
                <input type="file" name="image1" class="form-control" required="">
              </div>
              <!--<div class="form-group">-->
              <!--  <textarea name="message" id="" cols="30" rows="7"class="form-control" placeholder="Message" required=""></textarea>-->
              <!--</div>-->
              <div class="form-group">
                <input type="submit" value="Submit" name="Submit" class="btn btn-primary py-4 px-4">
              </div>
            </form>
          </div>
          </div>
          </div>

    </section>
    </html>
    
    
<?php 
isset($_POST['Submit']);

$name=$_POST['name'];
$image = $_FILES['image1']['name'];
$fileElementName = 'image1';
$path = 'uploads/'; 
$location = $path . $_FILES['image1']['name']; 
move_uploaded_file($_FILES['image1']['tmp_name'], $location); 
$price=$_POST['price'];
$conn=mysqli_connect("localhost","id8733186_kpt_user","fake1234","id8733186_kpt");
$ins="INSERT INTO `product_img`(`name`,`image`,`price`) VALUES ('$name','$image','$price')";
if(mysqli_query($conn,$ins ))
echo"<center><h1>Inserted successfully</h1></center>";
else
echo "<center>Not inserted</center>";
// mysqli_query($conn,$ins);


?>

