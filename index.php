<!DOCTYPE html>
<html>

<head>
 <title>Chet eldagi huquq va imtiyozlarim</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <style>
    body {
      font-family: Corbel;
      background-image: url('images/Qollanma.webp');
      background-size: 80% 92%;
      background-repeat: no-repeat;
      background-position: right 60px;
      background-color: #152659;
      background-attachment: fixed;
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

  <div class="p-3" style=" background: rgba(255,255,255,0.2);color:white; font-size: 20px; border-bottom: 2px solid white;">
    <div class="container"><span>O'zbekiston fuqarolarining chet ellardagi imtiyozlari VA huquqlarini o'rganadigan platforma</span>
      <span style="float: right;"> <img class="mx-2" src="images/component1.png">
        <img src="images/component2.png" class="mx-2">
        <img src="images/component3.png" class="mx-2">
      </span>
    </div>
  </div>



  <div style="text-align: center; color: rgba(255,255,0,0.8);position:absolute; bottom:20px; right:20px;font-size:3vw">Ubaydullo N.Z.</div>
  <div style="position: fidex; height:700px; top:60px;  width:20%; overflow-x: hidden; overflow-y:scroll;">
    <?php
    include 'Admin/admin/mysqli_connect.php';
    $query = 'SELECT * FROM fan';

    if ($r = mysqli_query($dbc, $query)) {
      while ($row = mysqli_fetch_array($r)) {
        print "      <a href='index1.php?id=" . $row['id'] . "' style='text-decoration: none; '>
      <button type='button' ' style='color: white;margin-top:5px ; background-image:linear-gradient(to left, #253374,#151938);font-weight: bold; display:block; width:100%; padding:5px'>" . $row['name'] . "</button>
   
 </a>";
      }
    }
    ?>

  </div>
  </div>



</body>

</html>