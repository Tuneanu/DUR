<?php
$connect = mysqli_connect("s7", "abcscoal_ulmi", "ZaPassword5", "abcscoal_Cuvinte");
if (isset($_POST["query"])) {
    $output = '';
    $query  = "SELECT * FROM CUVINTE WHERE Cuvant LIKE '%" . $_POST["query"] . "%'";
    $result = mysqli_query($connect, $query);
    $output = '<ul class="list-unstyled">';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<li>' . $row["Cuvant"] . '</li>';
        }
    } else {
        $output .= '<li>Cuvantul nu a fost gasit!</li>';
    }
    $output .= '</ul>';
    echo $output;
}
?>  