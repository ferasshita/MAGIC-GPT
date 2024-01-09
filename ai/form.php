<?php
include('../config/connect.php');
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Connection: keep-alive");

function sendSseMessage($data) {
    echo "data: $data\n\n";
    ob_flush();
    flush();
}
    // Retrieve the POST data
    $pid = filter_var(htmlentities($_GET['pid']),FILTER_SANITIZE_STRING);

     include('includes/gpt.php');

    if (!isset($pid)) {
        echo 'There is no ID!';
        return false;
    }

    $query = mysqli_query($conn, "SELECT * FROM websites WHERE id = '$pid'");

    if (!$query) {
        die("MySQL Error: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_array($query)) {
        $appName = $row['appName'];
        $appDescription = $row['appDescription'];
        $appAuthor = $row['appAuthor']; // Assuming 'appAuthor' is a valid column name
        $appColor = $row['appColor'];
        $appType = $row['appType'];
    }
    // Close the database connection if needed
if($appType == "ai"){
  include('includes/prompt.php');
}else{
  include('includes/basic.php');
}


    $query = mysqli_query($conn, "UPDATE websites SET made='1', folder='".$appName."_".$num_random."', zip='".$zipFilename."', logs='".$msg."' WHERE id = '$pid'");

    sendSseMessage("🎉 Done! <button onclick=\"generate()\" class=\"button gray xs\">Retry</button>");


    mysqli_close($conn);
    sendSseMessage("Event finished");

?>
