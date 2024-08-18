
<?php


   include "Admin\admin\mysqli_connect.php"; 

if (!$dbc) {
    die('Could not connect: ' . mysqli_error($dbc));
}
$son=1;
$q = $_GET['q'];
mysqli_select_db($dbc,"ajax_demo");
$sql="SELECT * FROM test WHERE idf=".$q;
$result = mysqli_query($dbc,$sql);



while($row = mysqli_fetch_array($result)) {
   print("<p style='text-align: left; padding:20px 0px 10px 20px; font: Bold 30px Montserrat; letter-spacing: 0; color: #434343;'>".$son.".".$row['savol']."</p> ");
print "<div class='custom-radio-button'> <div >	<span >A</span>
    <input type='radio'  id='color-red' name='$son' value='a' >
    <label for='color-red'>
      <span>".$row['a'].";
      </span>
    </label>
  </div>";
  
  print "<div>
<span  style='position: relative;  left:43px;z-index: -1; background: #D9D9D9;display: inline-block;padding: 10px 13px '>B</span><input type='radio' id='color-blue' name='son' value='b'>   <label for='color-blue'>
      <span>".$row['b']."</span>
    </label>
  </div>";
  
  print "<div>  <span  style='position: relative;  left:43px;z-index: -1; background: #D9D9D9;display: inline-block;padding: 10px 13px '>C</span><input type='radio' id='color-orange' name='$son' value='color-orange'>   <label for='color-orange'>
      <span>".  print $row['c']."  </span> </label></div>";

 print"  <div> <span  style='position: relative;  left:43px;z-index: -1; background: #D9D9D9;display: inline-block;padding: 10px 13px '>D</span>   <input type='radio' id='color-pink' name='color' value='color-pink'>   <label for='color-pink'>
      <span>".  print $row['d']." </span>
    </label>
  </div>
</div>";
   
 
   $son++;
   $top+=100;
    
}

mysqli_close($dbc);

?>