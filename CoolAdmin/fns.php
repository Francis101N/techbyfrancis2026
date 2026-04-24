<?php
$query_visitors = "SELECT COUNT(*) AS total FROM visitors ";
$result_visitors = mysqli_query($conn, $query_visitors);

if ($result_visitors) {
    $row_visitors = mysqli_fetch_assoc($result_visitors);
} else {
    echo "Error: " . mysqli_error($conn);
}
?>




