<?php
    // Retrieve the POST data
include('config/connect.php');
    $id = rand(0,9999)+time();
    $appName = filter_var(htmlentities($_POST['appName']),FILTER_SANITIZE_STRING);
     $appDescription = filter_var(htmlentities($_POST['appDescription']),FILTER_SANITIZE_STRING);
     $appAuthor = filter_var(htmlentities($_POST['appAuthor']),FILTER_SANITIZE_STRING);
     $appColor = filter_var(htmlentities($_POST['appColor']),FILTER_SANITIZE_STRING);
     $appType = filter_var(htmlentities($_POST['appType']),FILTER_SANITIZE_STRING);

    if (empty($appName) && empty($appDescription) && empty($appAuthor) && empty($appColor) && empty($appType)) {
        echo 'Please complete all fields';
        return false;
    }

  $query = mysqli_query($conn,"insert into websites (id,appName,appDescription,appAuthor,appColor,appType) values ('$id','$appName','$appDescription','$appAuthor','$appColor','$appType')");
    if (!$query) {
        die("MySQL Error: " . mysqli_error($conn));
    }
    echo $id;
?>
