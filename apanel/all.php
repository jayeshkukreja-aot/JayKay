<?php
$conn=mysqli_connect("localhost","thejayka_user","fake1234","thejayka_jaykay");
$sql= "SELECT * FROM `movies` WHERE type='1' order by id DESC ";
$query= mysqli_query($conn,$sql);
$urls=array();

if ($result=mysqli_query($conn,$sql))
  {

  while ($row=mysqli_fetch_assoc($result))
    {
$urls1=array();
    $data=array("name"=>$row['name'],"image"=>$row['image'],"link"=>$row['link'],"about"=>$row['about']);
 //   print_r($src);
   
          array_push($urls1,$data); 
          array_push($urls,$urls1[0]);
         
    }
    echo json_encode($urls,JSON_PRETTY_PRINT);
  // Free result set
  mysqli_free_result($result);
}

?>


<!--<-->
<!--$conn=mysqli_connect("localhost","thejayka_user","fake1234","thejayka_jaykay");-->
<!--$sql= "SELECT * FROM `movies` order by id DESC";-->
<!--$query= mysqli_query($conn,$sql);-->
<!--$urls=array();-->

<!--if ($result=mysqli_query($conn,$sql))-->
<!--  {-->

<!--  while ($row=mysqli_fetch_assoc($result))-->
<!--    {-->
<!--$urls1=array();-->
<!--    $data=array("name"=>$row['name'],"image"=>$row['image'],"link"=>$row['link'],"about"=>$row['about']);-->
   
<!--          array_push($urls1,$data); -->
<!--          array_push($urls,$urls1[0]);-->
         
<!--    }-->
<!--    echo json_encode($urls,JSON_PRETTY_PRINT);-->
  <!--// Free result set-->
<!--  mysqli_free_result($result);-->
<!--}-->

<!--?>-->
