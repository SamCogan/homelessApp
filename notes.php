<?php
$con=mysqli_connect("mysql9.mylogin.ie", "samcoganme", "88homeless88","RG293604_homeless");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO notes(name, note, location)
VALUES
('$_POST[name]','$_POST[note]','$_POST[loc]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=http://samcogan.me/homeless">';    
    exit; 

mysqli_close($con);
?>
