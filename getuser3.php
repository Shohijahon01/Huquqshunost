
<?php
$q = intval($_GET['q']);
include "Admin\admin\mysqli_connect.php";


mysqli_select_db($dbc, "ajax_demo");
$sql = "SELECT * FROM oliy_darslar WHERE id = '" . $q . "'";
$result = mysqli_query($dbc, $sql);



while ($row = mysqli_fetch_array($result)) {

    print($row['rasm']);
}

mysqli_close($dbc);

?>