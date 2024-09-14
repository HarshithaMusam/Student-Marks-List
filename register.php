<?php
     include "connection.php"
?>
<?php

if(isset($_POST['submit'])){
 $RegdNo=$_POST['RegdNo'];
 $Name=$_POST['Name'];
 $Marks1=$_POST['Marks1'];
$Marks2=$_POST['Marks2'];
$Marks3=$_POST['Marks3'];
$Total=$_POST['Total'];
$Average=$_POST['Average'];
 $Result=$_POST['Result'];
 $Division=$_POST['Division'];
$sql="INSERT Into
student(RegdNo,Name,Marks1,Marks2,Marks3,Total,Average,Result,Division) values('$RegdNo','$Name','$Marks1','$Marks2','$Marks3','$Total','$Average','$Result','$Division')";
  if($conn->query($sql)){
          echo "New record inserted successfully";
   }
}
?>
