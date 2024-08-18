<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chet eldagi huquq va imtiyozlarim</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    #hover {

      border-bottom: 0.5px solid #999;
    }

    #audio,
    #video {
      display: none;
    }

    #rasm {
      display: none;
      overflow-y: scroll;
      height: 500px
    }

    #overview,
    #sales,
    #purchases {
      display: none;
      overflow-y: scroll;
      height: 500px
    }

    #main_rasm {
      overflow-y: scroll;
      height: 500px
    }

    #main_rasm::-webkit-scrollbar {
      width: 3px;
    }

    #main_rasm::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #main_rasm::-webkit-scrollbar-thumb {
      background-color: rgb(233, 195, 83);
      outline: 1px solid yellow;
    }


    #sidebar::-webkit-scrollbar {
      width: 3px;
    }

    #sidebar::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #sidebar::-webkit-scrollbar-thumb {
      background-color: rgb(233, 195, 83);
      outline: 1px solid yellow;
    }

    #videoa::-webkit-scrollbar {
      width: 3px;
    }

    #videoa::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #videoa::-webkit-scrollbar-thumb {
      background-color: rgb(233, 195, 83);
      outline: 1px solid yellow;
    }


    #purchases::-webkit-scrollbar {
      width: 4px;
    }

    #purchases::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #purchases::-webkit-scrollbar-thumb {
      background-color: rgb(233, 195, 83);
      outline: 1px solid yellow;
    }

    #sales::-webkit-scrollbar {
      width: 4px;
    }

    #sales::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #sales::-webkit-scrollbar-thumb {
      background-color: rgb(233, 195, 83);
      outline: 1px solid yellow;
    }

    #overview::-webkit-scrollbar {
      width: 4px;
    }

    #overview::-webkit-scrollbar-track {
      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    #overview::-webkit-scrollbar-thumb {
      background-color: rgb(233, 195, 83);
      outline: 1px solid yellow;
    }

    .fab:hover {
      background: dodgerblue;
      padding: 15px;

    }

    .fa:hover {
      background: dodgerblue;
      padding: 10px;


    }

    #hover:hover {
      background: rgba(47, 200, 254, 0.05);
      border-bottom: 4px solid #2FC8FE;



    }

    body {
      font-family: Calibri;

    }
  </style>
</head>

<body style="background: #eee !important;">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar container px-5 py-3 bg-white col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <span style="text-align: left;font: Bold 24px/29px Montserrat;letter-spacing: 0;color: #000000;text-transform: uppercase;opacity: 0.72;">
        <?php
        include "Admin\admin\mysqli_connect.php";

        $fan_id = $_GET['id'];

        $sql = "SELECT * FROM fan where id= $fan_id";
        $result = mysqli_query($dbc, $sql);



        while ($row = mysqli_fetch_array($result)) {

          print $row['name'];
        } ?>


      </span>
      <span style="position: absolute;right: 10px"> <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
        <i class="fab fa-facebook-square px-2"></i>
        <i class="fab fa-youtube-square px-2"></i>
        <i class="fab fa-instagram px-2"></i></span>
    </nav>


    <div class=" page-body-wrapper" style="margin-left: 5%;margin-right: 5%">

      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="overflow-y: scroll; overflow-x:none;
      scrollbar-width: thin;
      scrollbar-color: var(--thumbBG) var(--scrollbarBG);height: 720px; width: 32%">
        <div style="padding:16px;text-align: left;  font: Bold 14px/18px Montserrat; letter-spacing: 0; color: #7B7B7B; opacity: 0.5; border-bottom: 0.5px solid #999; ">
          <?php
          include "Admin\admin\mysqli_connect.php";

          $fan_id = $_GET['id'];

          $sql = "SELECT * FROM fan where id= $fan_id";
          $result = mysqli_query($dbc, $sql);



          while ($row = mysqli_fetch_array($result)) {

            print $row['name'];
          } ?></div>
        <?php
        include "Admin\admin\mysqli_connect.php";

        $fan_id = $_GET['id'];

        $sql = "SELECT * FROM oliy_darslar where $fan_id=fan_id";
        $result = mysqli_query($dbc, $sql);


        $g = 1;
        while ($row = mysqli_fetch_array($result)) {

          $a = $row['id'];
          $b = $row['mavzu'];
          $k = $row['savollar_soni'];
          $l = $row['test_soni'];

          echo "<div class='row  text-muted' style='font-family:Verdana' id='hover'  onclick='showUser($a)'>
       <div class='col-2  ' style='text-align: center; width:122px; height70px;
       font: Bold 42px/52px Montserrat;letter-spacing: 0;color: #9D9D9D;  ' >$g</div>
       <div class='col-10 pr-3 py-1' style='text-align: left; font: Medium 20px/30px Montserrat;
       letter-spacing: 0;color: #9D9D9D; text-transform: capitalize;' id='mavzu1'>$b<br><span style='font-size:12px;margin-right:10px'>Testlar:$l</span><span style='font-size:12px'>Savol javoblar:$k</span></div>

       </div> ";
          $g++;
        }

        mysqli_close($dbc);

        ?>
      </nav>
      <!-- partial -->
      <div class="main-panel " style="margin-top:-33px;border-bottom: 1px solid gray">
        <div class="content-wrapper" style="background:#eee !important;">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Huquqlar</a>
                    </li>
                    <li class="nav-item" onclick="mfun()">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Majburiyatlar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Imtiyozlar</a>
                    </li>
                    <li class="nav-item" id="video-tab" style="position: absolute;right: 0px"> <i class="fas fa-photo-video">
                      </i>
                    </li>
                    <li class="nav-item " id="audio-tab" style="position: absolute;right: 0px"> <i class="fa fa-volume-up px-5 nav-link" aria-hidden="true"></i></li>
                    <li id="rasm-tab" style="position: absolute;right: 0px;background:dodgerblue;padding: 10px" class="nav-item nav-link ">
                      <i class="fas fa-images "></i>
                    </li>
                  </ul>


                  <div id="overview" class="ml-5 lead">
                    <script>
                      function showUser(str) {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                          if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("overview").innerHTML = this.responseText;
                          }
                        };
                        xhttp.open("GET", "getuser.php?q=" + str, true);
                        xhttp.send();

                        var xhttp1 = new XMLHttpRequest();
                        xhttp1.onreadystatechange = function() {
                          if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("sales").innerHTML = this.responseText;
                          }
                        };
                        xhttp1.open("GET", "getuser2.php?q=" + str, true);
                        xhttp1.send();


                        var xhttp2 = new XMLHttpRequest();
                        xhttp2.onreadystatechange = function() {
                          if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("purchases").innerHTML = this.responseText;
                          }
                        };
                        xhttp2.open("GET", "test.php?q=" + str, true);
                        xhttp2.send();





                        var xhttp2 = new XMLHttpRequest();
                        xhttp2.onreadystatechange = function() {
                          if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("rasm").innerHTML = this.responseText;
                          }
                        };
                        xhttp2.open("GET", "getuser3.php?q=" + str, true);
                        xhttp2.send();



                        var xhttp2 = new XMLHttpRequest();
                        xhttp2.onreadystatechange = function() {
                          if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("video").innerHTML = this.responseText;
                          }
                        };
                        xhttp2.open("GET", "vgetuser4.php?q=" + str, true);
                        xhttp2.send();


                        var xhttp2 = new XMLHttpRequest();
                        xhttp2.onreadystatechange = function() {
                          if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("audio").innerHTML = this.responseText;
                          }
                        };
                        xhttp2.open("GET", "agetuser5.php?q=" + str, true);
                        xhttp2.send();
                      }
                    </script>


                  </div>
                  <div style="font-size:28px" id="sales">

                  </div>


                  <div id="purchases">





                  </div>



                  <div>
                    <div id="rasm">

                    </div>
                    <div id="main_rasm">
                     
                    </div>

                    <div id="video">

                    </div>
                    <div style="position: absolute; top:0px;left:48%" id="audio">

                    </div>




                    <div id="videoa" style="height: 170px;overflow-y: scroll;margin-left: 1%;">
                      <div class="row">

                        <?php
                        include "Admin\admin\mysqli_connect.php";

                        $fan_id = $_GET['id'];

                        $sql = "SELECT * FROM oliy_darslar where $fan_id=fan_id";
                        $result = mysqli_query($dbc, $sql);


                        $g = 1;
                        while ($row = mysqli_fetch_array($result)) {

                          print "<div class='col-3'>
<video controls style='width: 200px;height: 170px'>
  <source src='Admin/admin/pages/news/" . $row['video'] . "' type='video/mp4'>
</video>";
                        }


                        ?>


                        <div class="col-3">
                          <video controls style='width: 200px;height: 170px'>
                            <source src='Videodarslar/3-maruza_MMS.mp4' type='video/mp4'>
                          </video>

                        </div>



                      </div>







                    </div>









                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <script type="text/javascript">
        $(document).ready(function() {
          $("#overview-tab").click(function() {

            $("#overview").show();
            $("#sales").hide();
            $("#main_rasm").hide();
            $("#audio").hide();
            $("#rasm").hide();
            $("#purchases").hide();
          });
          $("#sales-tab").click(function() {
            $("#overview").hide();
            $("#audio").hide();
            $("#main_rasm").hide();
            $("#sales").show();
            $("#rasm").hide();
            $("#purchases").hide();
          });
          $("#purchases-tab").click(function() {
            $("#sales").hide();
            $("#main_rasm").hide();
            $("#audio").hide();
            $("#overview").hide();
            $("#rasm").hide();
            $("#purchases").show();
          });
          $("#rasm-tab").click(function() {
            $("#sales").hide();
            $("#overview").hide();
            $("#audio").hide();
            $("#main_rasm").hide();
            $("#rasm").show();
            $("#purchases").hide();
          });
          $("#audio-tab").click(function() {
            $("#sales").hide();
            $("#main_rasm").hide();
            $("#overview").show();
            $("#rasm").hide();
            $("#audio").show();
            $("#purchases").hide();
          });

        });
      </script>
      <script>
        $(document).ready(function() {
          // Activate Carousel
          $("#myCarousel").carousel();

          // Enable Carousel Indicators
          $(".item1").click(function() {
            $("#myCarousel").carousel(0);
          });
          $(".item2").click(function() {
            $("#myCarousel").carousel(1);
          });
          $(".item3").click(function() {
            $("#myCarousel").carousel(2);
          });

          // Enable Carousel Controls
          $(".carousel-control-prev").click(function() {
            $("#myCarousel").carousel("prev");
          });
          $(".carousel-control-next").click(function() {
            $("#myCarousel").carousel("next");
          });
        });
      </script>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>