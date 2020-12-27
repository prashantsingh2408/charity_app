<?php
function ngos_total_raised($id_ngo){
    require_once 'config.php';
    $id_ngo;

    // Fetch users raise from ngos_user
    $stmt = $link->prepare("SELECT raised FROM ngos_user WHERE id_ngos=?");
    // $stmt ->bind_param('i', $id_ngo);
    // $stmt ->execute();
    // $result = $stmt->get_result();

    // //Sum raised of all user belong to this ngos
    // $sum =0;
    // while ($rows = $result->fetch_array(MYSQLI_ASSOC)) {
    //     if ($rows['raised'] == null) {
    //         $sum = $sum + 0;
    //     } else {
    //         $sum = $sum + $row['raised'];
    //     }
    // }
    // return $sum;
}
?>