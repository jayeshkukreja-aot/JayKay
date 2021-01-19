<?php
$conn=mysqli_connect("localhost","id8733186_kpt_user","fake1234","id8733186_kpt");
$sql= "SELECT * FROM `product_img` order by id DESC";
$query= mysqli_query($conn,$sql);
$urls=array();

if ($result=mysqli_query($conn,$sql))
  {

  while ($row=mysqli_fetch_assoc($result))
    {
$urls1=array();
    $data=array("name"=>$row['name'],"image"=>$row['image'],"price"=>$row['price']);
 //   print_r($src);
   
          array_push($urls1,$data); 
          array_push($urls,$urls1[0]);
         
    }
    echo json_encode($urls,JSON_PRETTY_PRINT);
  // Free result set
  mysqli_free_result($result);
}

?>
