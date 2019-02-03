<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  </body>
</html>

<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="protfolio";
$con=mysqli_connect($servername,$username,$password,$dbname);

if ($con){
echo "connect ok";
}
else {
  echo "conect faild";
}
?>


<?php


include("conect.php");
error_reporting(0);
$query = "SELECT * FROM personal";
  $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
  if ($total!=0) {
 ?>
 <table style="width:100">
   <tr>
     <th>Id</th>
      <th>Name</th>
     <th>Email</th>
     <th>Phone</th>
	 <th>Massage</th>

   </tr>

 <?php
while($result=mysqli_fetch_assoc($data))
{
  echo "<tr>
  
         <td>".$result['id']."</td>
    
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
		<td>".$result['phone']."</td>
		<td>".$result['massage']."</td>
        
  </tr>";

}
}
else {
  echo "no record found";
}

  ?>
</table>


