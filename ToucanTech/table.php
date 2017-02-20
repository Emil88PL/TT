<?php
require_once "connect.php";
$con = mysqli_connect($host,$db_user,$db_password,$db_name);
?>

 <div id="school1" class="colors" style="display:none"><?php
  $rez = mysqli_query($con,"SELECT * FROM users WHERE school like 'school1'") 
  or die('Error');
  if(mysqli_num_rows($rez) > 0) {
      echo "<table class='table'>";
      echo "<th>Name</th>";
      echo "<th>Email Address</th>";
      echo "<th>School</th>";
      while($r = mysqli_fetch_assoc($rez)) {   
          echo "<tr>";
          echo "<td>".$r['username']."</td>"; 
          echo "<td>".$r['email']."</td>";
          echo "<td>".$r['school']."</td>";  
          echo "</tr>"; 
      } 
      echo "</table><br/>";    
  } 
  ?></div>

  <div id="school2" class="colors" style="display:none"><?php
  $rez = mysqli_query($con,"SELECT * FROM users WHERE school like 'school2'") 
  or die('Error');
  if(mysqli_num_rows($rez) > 0) {
      echo "<table class='table'>";
      echo "<th>Name</th>";
      echo "<th>Email Address</th>";
      echo "<th>School</th>";
      while($r = mysqli_fetch_assoc($rez)) {   
          echo "<tr>";
          echo "<td>".$r['username']."</td>"; 
          echo "<td>".$r['email']."</td>";
          echo "<td>".$r['school']."</td>";  
          echo "</tr>"; 
      } 
      echo "</table><br/>";
  } 
  ?></div>