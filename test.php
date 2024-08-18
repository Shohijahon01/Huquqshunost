<!DOCTYPE html>
<html>

<head>
  <title></title>
  <style>
    .custom-radio-button input[type="radio"]+label {
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .custom-radio-button input[type="radio"]+label span {
      display: inline-block;
      width: 40px;
      height: 40px;
      margin: -1px 4px 0 0;
      vertical-align: middle;
      cursor: pointer;
      background-repeat: no-repeat;
      background-position: center;
      text-align: center;
      line-height: 44px;
    }

    .custom-radio-button input[type="radio"]+label span img {
      opacity: 0;
      transition: all 0.3s ease;
    }

    #birr {
      position: relative;
      left: 90;
      display: inline-block;
      padding: 10px 13px;
    }

    .custom-radio-button input[type="radio"]:checked+label span {
      background-color: orange;
      width: 40px;
      height: 40px;
      opacity: 0.5;
      z-index: -1;
    }
  </style>
</head>

<body>

  <form action='test1.php' method='get'>
    <div class="container">
      <div class="row">

        <div class="custom-radio-button">

          <?php

          $son = 1;
          include "Admin\admin\mysqli_connect.php";


          $son = 1;
          $top = 0;
          $q = $_GET['q'];
          mysqli_select_db($dbc, "ajax_demo");
          $sql = "SELECT * FROM test WHERE idf=" . $q;
          $result = mysqli_query($dbc, $sql);



          while ($row = mysqli_fetch_array($result)) {

            echo "<p style='text-align: left;   padding:20px 0px 10px 20px; font: Bold 30px Montserrat; letter-spacing: 0; color: #434343;'>" . $son . "." . $row['savol'] . "</p>" . " 
  <div >
  
  	<span  id='birr'></span> <input type='radio' id='a.$son' name='x$son' value='a' >
    <label for='color-red'> <span>A)</span>
    </label>
         " .
              $row['a'] . "
     
  </div>
 
  
  <div>
<span id='birr'></span>
    <input type='radio' id='b.$son' name='x$son' value='b'>
    <label for='color-blue'>
      <span>B)
      </span>
    </label>   " .
              $row['b'] . "
  </div>

  <div>
    <span id='birr'></span>
    <input type='radio' id='c.$son' name='x$son' value='c'>
    <label  for='color-orange'>
      <span>
     C)
      </span>
    </label>
       " .
              $row['c'] . "
    </div>


  <div>
<span  id='birr'></span>
    <input type='radio' id='d.$son' name='x$son' value='d'>
    <label for='color-pink'>
      <span>D)
      </span>
    </label>
       " .
              $row['d'] . "
  </div>

  <div style='display:none'>
<span  id='birr'></span>
    <input type='radio'checked id='t.$son' name='natija$son' value='" . $row['t'] . "'>
    <label for='color-pink'>
      <span> 
      </span>
    </label>
       " .
              $row['t'] . "
  </div>
  

 
</div>
	</div>
";
            $son++;
          }

          echo "<input type='hidden' name='soni' value='$son'>";



          ?>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <input type="submit" value="Natija">
  </form>
</body>

</html>