
<?php
$q = intval($_GET['q']);
include "Admin\admin\mysqli_connect.php";


mysqli_select_db($dbc, "ajax_demo");
$sql = "SELECT * FROM savol_javob WHERE id = '" . $q . "'";
$result = mysqli_query($dbc, $sql);



while ($row = mysqli_fetch_array($result)) {

    print("<h3 style='text-align: left; padding:20px 0px 10px 20px; font: Bold 20px/24px Montserrat; letter-spacing: 0; color: #434343;'>  " . $row['savollar'] . "</h3>");
}

mysqli_close($dbc);

?>